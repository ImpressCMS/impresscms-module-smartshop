<?php

/**
* $Id$
* Module: SmartShop
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

// Module Info
// The name of this module

global $xoopsModule;
define("_MI_SSHOP_MD_NAME", "SmartShop");
define("_MI_SSHOP_MD_DESC", "Simple and flexible content module");

define("_MI_SSHOP_INDEX", "Index");
define("_MI_SSHOP_CATEGORIES", "Cat�gories");
define("_MI_SSHOP_ITEMS", "Items");
define("_MI_SSHOP_TRANSACTION", "Transactions");

define("_MI_SSHOP_ITEMSPERPAGE", "Items par cat�gorie");
define("_MI_SSHOP_ITEMSPERPAGE_DSC", "Nombre d'items par page");

define("_MI_SSHOP_MODMETADESC", "Meta-description du module");
define("_MI_SSHOP_MODMETADESC_DSC", "");
define("_MI_SSHOP_INVENTORY", "Inventaire");
define("_MI_SSHOP_SUBMIT_BY_CAT", "Soumettre un item");
define("_MI_SSHOP_WAIT_APPROVAL", "Items soumis");
define("_MI_SSHOP_CURR_USER_SUB", "Vos soumissions");
define("_MI_SSHOP_RENEW", "Renouveler expir&eacute;s");

define("_MI_SSHOP_NEW_SEARCH", "Recherche");
define("_MI_SSHOP_NEW_ADDS", "Items r�cents");
define("_MI_SSHOP_NEW_SELLERS", "Nouveaux vendeurs");



define("_MI_SSHOP_GLOBAL_ITEM_NOTIFY", "Global");
define("_MI_SSHOP_GLOBAL_ITEM_NOTIFY_DSC", "");

define("_MI_SSHOP_ITEM_NOTIFY", "Item");
define("_MI_SSHOP_ITEM_NOTIFY_DSC", "");

define("_MI_SSHOP_ITEM_APPROVED_NOTIFY", "Item approuv�");
define("_MI_SSHOP_ITEM_APPROVED_NOTIFY_CAP", "Notifiez-moi quand cette annonce sera publi�e");
define("_MI_SSHOP_ITEM_APPROVED_NOTIFY_DSC", "");
define("_MI_SSHOP_ITEM_APPROVED_NOTIFY_SBJ", "Votre annonce a �t� publi�e");

define("_MI_SSHOP_ITEM_SUBMITTED_NOTIFY", "Item soumis");
define("_MI_SSHOP_ITEM_SUBMITTED_NOTIFY_CAP", "Notifiez-moi quand un utilisateur soumet une annonce");
define("_MI_SSHOP_ITEM_SUBMITTED_NOTIFY_DSC", "");
define("_MI_SSHOP_ITEM_SUBMITTED_NOTIFY_SBJ", "Une annonce a �t� soumise");

define("_MI_SSHOP_GLOBAL_ITEM_PUBLISHED_NOTIFY", "Item publi�");
define("_MI_SSHOP_GLOBAL_ITEM_PUBLISHED_NOTIFY_CAP", "Notifiez-moi � la publication d'une nouvelle annonce");
define("_MI_SSHOP_GLOBAL_ITEM_PUBLISHED_NOTIFY_DSC", "");
define("_MI_SSHOP_GLOBAL_ITEM_PUBLISHED_NOTIFY_SBJ", "Nouvelle annonce publi�e");

define("_MI_SSHOP_CATEGORY_NAV", "Activer la navigation par cat�gories");
define("_MI_SSHOP_CATEGORY_NAV_DSC", "Si vous choisissez 'Oui', la liste des cat�gories s'affichera dans la page index du module.'");
define("_MI_SSHOP_NAV_MODE", "Mode d'aide � la navigation'");
define("_MI_SSHOP_NAV_MODE_DSC", "Si vous choisissez 'Miettes de pain', le chemin sera affich� en haut de chaque page pour situer l'utilisateur.<br/>
		Le Mode 'Retour' fait afficher un bouton de retour � la page pr�c�dente sur chaque page.");
define("_MI_SSHOP_NAV_MODE_BREAD", "Miettes de pain");
define("_MI_SSHOP_NAV_MODE_BACK", "Retour");
define("_MI_SSHOP_NAV_MODE_NONE", "Aucun");
define("_MI_SSHOP_CURRENCIES", "Devises");
define("_MI_SSHOP_CURRENCIES_DSC", "Devises qui seront disponibles pour afficher les items.");
define("_MI_SSHOP_CURRENCY_CANDOL", "CDA");
define("_MI_SSHOP_CURRENCY_USDOL", "USD");
define("_MI_SSHOP_CURRENCY_EURO", "Euro");
define("_MI_SSHOP_DEFEDITOR", "�diteur par d�faut");
define("_MI_SSHOP_DEFEDITOR_DSC", "");

define("_MI_SSHOP_MAX_SIZE", "Grosseur maximale des images d'items � charger");
define("_MI_SSHOP_MAX_SIZE_DSC", "");
define('_MI_SSHOP_IMG_MAX_WIDTH', "Largeur maximale des images:");
define('_MI_SSHOP_IMG_MAX_WIDTH_DSC', "Ceci d&eacute;finira la largeur maximale des images pouvant &ecirc;tre charg&eacute;s dans le module.");
define('_MI_SSHOP_IMG_MAX_HEIGHT', "Hauter maximale des images:");
define('_MI_SSHOP_IMG_MAX_HEIGHT_DSC', "Ceci d&eacute;finira la hauteur maximale des images pouvant &ecirc;tre charg&eacute;s dans le module.");
define("_MI_SSHOP_DEF_DELAY_EXP", "D�lai par d�faut avant expiration");
define("_MI_SSHOP_DEF_DELAY_EXP_DSC", "Nombre de jours entre la publication d'un item et son expiration. <b>Doit �tre un nombre entier.</b>'. Inscrivez '0' pour que les items n'expirent pas");
define("_MI_SSHOP_DISPLAY_POSTER", "Afficher l'auteur");
define("_MI_SSHOP_DISPLAY_POSTER_DSC", "");
define("_MI_SSHOP_DISPLAY_DATE_PUB", "Afficher la date de publication des items");
define("_MI_SSHOP_DISPLAY_DATE_PUB_DSC", "");
define("_MI_SSHOP_EXP_MANAGEBY_CRON", "Gestion des expirations via un 'cron job'?");
define("_MI_SSHOP_EXPMANAGEBYCRONDSC", "Recommand�. Il faut alors faire �x�cuter le script 'smartshop/cron_expire.php' via votre seveur.<br> Si vous cochez 'non', la v�rification des expirations se fait � chaque visite d'un utilisateur.");
define("_MI_SSHOP_DEF_AVATAR", "Photo d'utilisateur par d�faut");
define("_MI_SSHOP_DEF_AVATAR_DSC", "Image qui sera montr�e dans les informations sur l'utilisateur dans le cas o� celui-ci n'a pas d'avatar. Doit �tre plac�e dans le r�pertoire smartshop/images. Laisser blanc pour ne pas en mettre.");
define("_MI_SSHOP_DEF_ITEM_PIC", "Image d'item par d�faut");
define("_MI_SSHOP_DEF_ITEM_PIC_DSC", "Image qui sera montr�e dans les informations sur l'item dans le cas o� celui-ci n'a pas d'image. Doit �tre plac�e dans le r�pertoire smartshop/images.  Laisser blanc pour ne pas en mettre.");
define("_MI_SSHOPSUBMIT_INTRO", "Introduction de la page de soumission d'item");
define("_MI_SSHOP_SORT", "Trier les liens par:");
define("_MI_SSHOP_SORT_DSC", "");
define("_MI_SSHOP_SORT_WEIGHT", "Poids");
define("_MI_SSHOP_SORT_DATE", "Date");
define("_MI_SSHOP_DISP_FIELDS", "Champs � afficher");
define("_MI_SSHOP_DISP_FIELDS_DSC", "Champs qui seront visible (ne concerne pas les champs particulliers)");
define("_MI_SSHOP_DISP_FIELDS_LINK", "Lien externe");
define("_MI_SSHOP_DISP_FIELDS_DESC", "Description");
define("_MI_SSHOP_DISP_FIELDS_IMG", "Image");
define("_MI_SSHOP_DISP_FIELDS_PRICE", "Prix");
define("_MI_SSHOP_DISP_FIELDS_COUNT", "Nombre de clics");
define("_MI_SSHOP_DISP_FIELDS_DATE", "Date d`affichage");
define("_MI_SSHOP_NOTIF_EXP", "Notifications d'expiration");
define("_MI_SSHOP_NOTIF_EXP_DSC", "S�lectionnez � combien de jours avant l'expiration vous souhaitez aviser l'auteur");
define("_MI_SSHOP_AUTO_APP", "Les items soumis sont toujours approuv�s");
define("_MI_SSHOP_AUTO_APP_DSC", "Si vous cochez 'Non', un mod�rateur devra approuver les items soumis ou modifi�s.");
define("_MI_SSHOP_NONE", "Aucune notification");
define("_MI_SSHOP_ONLY_EXP", "Seulement expiration");
define("_MI_SSHOP_ALLWD_GRP", "Groupes pouvant soumettre");
define("_MI_SSHOP_ALLWD_GRP_DSC", "Choisissez les groupes d'utilisateurs qui pourront proposer des items.");
define("_MI_SSHOP_INCLUDESEARCH", "Inclure recherche");
define("_MI_SSHOP_INCLUDESEARCHDSC", "Inclure le formulaire de recherche au bas de chaque page du module");
define("_MI_SSHOP_DEFCATVIEWGR", "Permissions de visualisation des cat�gories par d�faut");
define("_MI_SSHOP_DEFCATVIEWGRDSC", "");
define("_MI_SSHOP_SUB_MENU", "Soumettre un item");
define("_MI_SSHOP_STANDARD", "Version standard");
define("_MD_SSHOP_AVAILABLE_CREDITS","Vos cr�dits disponibles");
?>