<?php
/*
 * Search entries in LDAP directory
 */

$result = "";
$nb_entries = 0;
$entries = array();
$size_limit_reached = false;

if ($result === "") {

    require_once(__DIR__ . "/conf/config.inc.php");
    require_once(__DIR__ . "/lib/ldap.inc.php");
    require_once(__DIR__ . "/lib/date.inc.php");

    # Connect to LDAP
    $ldap_connection = wp_ldap_connect($ldap_url, $ldap_starttls, $ldap_binddn, $ldap_bindpw);

    $ldap = $ldap_connection[0];
    $result = $ldap_connection[1];

    if ($ldap) {

        # Compute idle date
        $dateIdle = new DateTime();
        date_sub( $dateIdle, new DateInterval('P'.$idledays.'D') );
        $dateIdleLdap = string2ldapDate( $dateIdle->format('d/m/Y') );

        # Search filter
        $ldap_filter = "(&".$ldap_user_filter."(|(!(authTimestamp=*))(authTimestamp<=".$dateIdleLdap.")))";

        # Search attributes
        $attributes = array();
        foreach( $search_result_items as $item ) {
            $attributes[] = $attributes_map[$item]['attribute'];
        }
        $attributes[] = $attributes_map[$search_result_title]['attribute'];
        $attributes[] = $attributes_map[$search_result_sortby]['attribute'];

        # Search for users
        $search = ldap_search($ldap, $ldap_user_base, $ldap_filter, $attributes, 0, $ldap_size_limit);

        $errno = ldap_errno($ldap);

        if ( $errno == 4) {
            $size_limit_reached = true;
        }
        if ( $errno != 0 and $errno !=4 ) {
            $result = "ldaperror";
            error_log("LDAP - Search error $errno  (".ldap_error($ldap).")");
        } else {

            # Sort entries
            if (isset($search_result_sortby)) {
                $sortby = $attributes_map[$search_result_sortby]['attribute'];
                ldap_sort($ldap, $search, $sortby);
            }

            # Get search results
            $nb_entries = ldap_count_entries($ldap, $search);

            if ($nb_entries === 0) {
                $result = "noentriesfound";
            } else {
                $entries = ldap_get_entries($ldap, $search);
                unset($entries["count"]);

                $smarty->assign("page_title", "idleaccountstitle");
                $smarty->assign("nb_entries", $nb_entries);
                $smarty->assign("entries", $entries);
                $smarty->assign("size_limit_reached", $size_limit_reached);

                $columns = $search_result_items;
                if (! in_array($search_result_title, $columns)) array_unshift($columns, $search_result_title);
                $smarty->assign("listing_columns", $columns);
                $smarty->assign("listing_linkto",  isset($search_result_linkto) ? $search_result_linkto : array($search_result_title));
                $smarty->assign("listing_sortby",  array_search($search_result_sortby, $columns));
                $smarty->assign("show_undef", $search_result_show_undefined);
                $smarty->assign("truncate_value_after", $search_result_truncate_value_after);
            }
        }
    }
}

?>
