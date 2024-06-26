<?php

// Continue session variables
session_start();
$displayname = $_SESSION["displayname"];

#==============================================================================
# French
#==============================================================================

$messages["label_created"] = "Créé";
$messages["label_modified"] = "Modifié";
$messages['accountlocked'] = "Le compte est bloqué";
$messages['accountnotlocked'] = "Échec de blocage du compte";
$messages['accountnotunlocked'] = "Échec de déblocage du compte";
$messages['accountstatus'] = "Statut du compte";
$messages['accountunlocked'] = "Le compte n'est pas bloqué";
$messages['checkpassword'] = "Vérification du mot de passe";
$messages['currentpassword'] = "Mot de passe actuel";
$messages['dashboards'] = "Tableaux de bord";
$messages['displayentry'] = "Afficher l'entrée";
$messages['dnrequired'] = "L'identifiant de l'entrée est requis";
$messages['editentry'] = "Modifier l'entrée";
$messages['entriesfound'] = "entrées trouvées";
$messages['entryfound'] = "entrée trouvée";
$messages['expiredaccounts'] = "Mots de passe expirés";
$messages['false'] = "Non";
$messages['forcereset'] = "Forcer la réinitialisation à la prochaine connexion";
$messages['idleaccounts'] = "Comptes inactifs";
$messages['idleaccountstitle'] = "Comptes inactifs depuis plus de $idledays jours";
$messages['label_authtimestamp'] = "Dernière authentification";
$messages['label_businesscategory'] = "Catégorie";
$messages['label_carlicense'] = "Permis de conduire";
$messages['label_description'] = "Description";
$messages['label_displayname'] = "Nom d'affichage";
$messages['label_employeenumber'] = "Numéro d'employé";
$messages['label_employeetype'] = "Type d'employé";
$messages['label_expirationdate'] = "Date d'expiration";
$messages['label_fax'] = "Télécopie";
$messages['label_firstname'] = "Prénom";
$messages['label_fullname'] = "Nom complet";
$messages['label_identifier'] = "Identifiant";
$messages['label_l'] = "Ville";
$messages['label_lastname'] = "Nom";
$messages['label_mail'] = "Courriel";
$messages['label_mailquota'] = "Quota messagerie";
$messages['label_mobile'] = "Portable";
$messages['label_organization'] = "Organisation";
$messages['label_organizationalunit'] = "Service";
$messages['label_pager'] = "Messagerie";
$messages['label_phone'] = "Téléphone";
$messages['label_postaladdress'] = "Adresse";
$messages['label_postalcode'] = "Code postal";
$messages['label_pwdaccountlockedtime'] = "Date de blocage";
$messages['label_pwdchangedtime'] = "Dernier changement de mot de passe";
$messages['label_pwdfailuretime'] = "Derniers échecs d'authentification";
$messages['label_pwdreset'] = "Réinitialisation du mot de passe à la prochaine connexion";
$messages['label_state'] = "État";
$messages['label_street'] = "Voie";
$messages['label_title'] = "Titre";
$messages['ldaperror'] = "Erreur de communication avec l'annuaire LDAP";
$messages['lockaccount'] = "Bloquer le compte";
$messages['lockedaccounts'] = "Comptes bloqués";
$messages['login'] = "Veuillez vous connecter pour continuer";
$messages['logout'] = "Déconnexion";
$messages['newpassword'] = "Nouveau mot de passe";
$messages['noentriesfound'] = "Aucune entrée trouvée";
$messages['notdefined'] = "Non renseigné";
$messages['pager_all'] = "Tout";
$messages['password'] = "Mot de passe";
$messages['passwordchanged'] = "Le mot de passe a été changé";
$messages['passwordexpired'] = "Le mot de passe est expiré";
$messages['passwordinvalid'] = "Authentification en échec";
$messages['passwordok'] = "Authentification réussie !";
$messages['passwordrefused'] = "Le mot de passe a été refusé";
$messages['passwordrequired'] = "Merci de saisir le mot de passe";
$messages['print_all'] = "Imprimer tous les résultats";
$messages['print_page'] = "Imprimer cette page";
$messages['resetpassword'] = "Réinitialisation du mot de passe";
$messages['search'] = "Rechercher";
$messages['searchrequired'] = "Veuillez saisir votre recherche";
$messages['sizelimit'] = "La limite de recherche a été atteinte, certaines entrées n'ont pas pu être affichées";
$messages['submit'] = "Envoyer";
$messages['title'] = "Guichet de service";
$messages['title_search'] = "Résultats de la recherche :";
$messages['tooltip_emailto'] = "Envoyer un email";
$messages['tooltip_phoneto'] = "Composer ce numéro";
$messages['true'] = "Oui";
$messages['unlockaccount'] = "Débloquer le compte";
$messages['unlockdate'] = "Date de déblocage automatique :";
$messages['username'] = "Username";
$messages['usernamerequired'] = "Merci d'entrer un username";
$messages['usernotallowed'] = "Votre compte n'est pas autorisé à se connecter. Veuillez utiliser un compte autorisé.";
$messages['usernotfound'] = "Le nom d'utilisateur saisi est introuvable. Veuillez réessayer.";
$messages['welcome'] = "Bienvenue sur le guichet de service LDAP Tool Box";
$messages['welcomeuser'] = "Bienvenue, $displayname";
$messages['willexpireaccounts'] = "Mots de passe bientôt expirés";
$messages['willexpireaccountstitle'] = "Mots de passe allant expirer dans moins de $willexpiredays jours";

?>
