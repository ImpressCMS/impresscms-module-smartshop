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
define("_CO_SOBJECT_SOLD", "Marquer comme vendu");
define("_CO_SSHOP_STATUS_OFFLINE", "Hors ligne");
define("_CO_SSHOP_STATUS_ONLINE", "En ligne");
define("_CO_SSHOP_STATUS_EXPIRED", "Expir�");
define("_CO_SSHOP_STATUS_SUBMITTED", "Soumis");
define("_CO_SSHOP_STATUS_SOLD", "Vendu");
define("_CO_SSHOP_ITEM_NAME", "Nom");
define("_CO_SSHOP_ITEM_DATESUB", "Date de cr�ation");
define("_CO_SSHOP_ITEM_DATESUB_DSC", "Date de cr�ation de cet item.");
define("_CO_SSHOP_ITEM_DATE_EXP", "Date d'expiration");
define("_CO_SSHOP_ITEM_DATE_EXP_DSC", "Date d'expiration de cet item.");
define("_CO_SSHOP_ITEM_STATUS", "Statut");
define("_CO_SSHOP_ITEM_CATEGORY", "Cat&eacute;gorie");
define("_CO_SSHOP_ITEM_CATEGORY_DSC", "Cat&eacute;gorie &agrave; laquelle appartient cet item.");
define("_CO_SSHOP_ITEM_TITLE_DSC", "Titre de cet item");
define("_CO_SSHOP_ITEM_SUMMARY", "Summary");
define("_CO_SSHOP_ITEM_SUMMARY_DSC", "Summary of this item.");

define("_CO_SSHOP_ITEM_DESC", "Description");
define("_CO_SSHOP_ITEM_DESC_DSC", "Votre description ne doit pas d�passer 120 caract�res autrement, l�information ex�dante sera tronqu�e.");

define("_CO_SSHOP_ITEM_PRICE", "Prix");
define("_CO_SSHOP_ITEM_PRICE_DSC", "");

define("_CO_SSHOP_ITEM_CURRENCY", "Devise");
define("_CO_SSHOP_ITEM_CURRENCY_DSC", "");

define("_CO_SSHOP_ITEM_DATE", "Date de publication");
define("_CO_SSHOP_ITEM_DATE_DSC", "");

define("_CO_SSHOP_CAT_HASITEM", "Peut contenir des items");
define("_CO_SSHOP_CAT_HASITEM_DSC", "Choisissez 'Oui' si la cat�gorie contiendra des items. Choisissez 'Non' si cette cat�gorie n'est destin�e qu'&agrave; contenir d'autres cat�gories.");

define("_CO_SSHOP_CAT_ISFORSALE", "Les items contenus sont � vendre");
define("_CO_SSHOP_CAT_ISFORSALE_DSC", "Si vous choisissez 'Oui', les informations relatives au prix seront affich�es.");

define("_CO_SSHOP_CURRENCY_CANDOL", "CDA");
define("_CO_SSHOP_CURRENCY_USDOL", "USD");
define("_CO_SSHOP_CURRENCY_EURO", "Euro");

define("_CO_SSHOP_CAT_ATTRIBUT_CAT", "Cat&eacute;gorie");
define("_CO_SSHOP_CAT_ATTRIBUT_CAT_DSC", "");

define("_CO_SSHOP_CAT_ATT_NAME", "Nom");
define("_CO_SSHOP_CAT_ATT_NAME_DSC", "");

define("_CO_SSHOP_CAT_ATT_TYPE", "Type");
define("_CO_SSHOP_CAT_ATT_TYPE_DSC", "");

define("_CO_SSHOP_CAT_ATT_REQ", "Requis?");
define("_CO_SSHOP_CAT_ATT_REQ_DSC", "");

define("_CO_SSHOP_CAT_ATT_DEFAULT", "D�faut");
define("_CO_SSHOP_CAT_ATT_DEFAULT_DSC", "");

define("_CO_SSHOP_CAT_ATT_SORTABLE", "Triable?");
define("_CO_SSHOP_CAT_ATT_SORTABLE_DSC", "");

define("_CO_SSHOP_CAT_ATT_SEARCHABLE", "Recherchable?");
define("_CO_SSHOP_CAT_ATT_SEARCHABLE_DSC", "");

define("_CO_SSHOP_CAT_ATT_DISPLAY", "Afficher du cot� utilisateur?");
define("_CO_SSHOP_CAT_ATT_DISPLAY_DSC", "");
define("_CO_SSHOP_CAT_OPTIONS", "Options");
define("_CO_SSHOP_CAT_OPTIONS_DSC", "Si ce champ en est un � option, entrez les ici, s�par�es par unsaut de ligne.");

define("_CO_SSHOP_ITEM_UID", "Auteur");
define("_CO_SSHOP_ITEM_UID_DSC", "Auteur de l'item.");
define("_CO_SSHOP_ITEM_STATUS_DSC", "Statut de cet item. Seulement les items 'En ligne' seront visibles du cot� utilisateur.");

define("_CO_SSHOP_CAT_ATT_DESCRIPTION", "Description");
define("_CO_SSHOP_CAT_ATT_DESCRIPTION_DSC", "");

define("_CO_SSHOP_TYPE_CHECK", "Checkbox");
define("_CO_SSHOP_TYPE_HTML", "HTML Area");
define("_CO_SSHOP_TYPE_RADIO", "Radio box");
define("_CO_SSHOP_TYPE_SELECT", "Select box");
define("_CO_SSHOP_TYPE_TEXT", "Text box");
define("_CO_SSHOP_TYPE_UPLOAD", "File upload");
define("_CO_SSHOP_TYPE_UPLOADIMG", "Image upload");
define("_CO_SSHOP_TYPE_YN", "Yes / No");
define("_CO_SSHOP_TYPE_TAREA", "Text area");

define("_CO_SSHOP_ITEM_NAME_DSC", "Nom de cet item");
define("_CO_SSHOP_POSTER", "Affich� par");

define("_CO_SSHOP_HITS", "Vu");

define("_CO_SSHOP_ITEM_SUBMIT", "Soumettre un item");
define("_CO_SSHOP_PM", "Message Priv�");
define("_CO_SSHOP_EMAIL", "Courriel");
define("_CO_SSHOP_ITEM_IMAGE", "Logo");
define("_CO_SSHOP_ITEM_IMAGE_DSC", "Les images ne doivent pas d�passer %s X %s <br>et doivent �tre plus petites que %s bytes.<br>Formats accept�s: GIF, JPG, PNG");
define("_CO_SSHOP_ITEM_LINK_NAME", "Nom du lien");
define("_CO_SSHOP_ITEM_LINK_NAME_DSC", "Texte cliquable");
define("_CO_SSHOP_ITEM_LINK_URL", "Adresse du lien");
define("_CO_SSHOP_ITEM_LINK_URL_DSC", "URL � atteindre");
define("_CO_SSHOP_CAT_PUB", "Pub");
define("_CO_SSHOP_CAT_PUB_DSC", "");
define("_CO_SSHOP_ITEM_BILL_ADDR", "Adresse de facturation");
define("_CO_SSHOP_ITEM_BILL_ADDR_DSC", "");
define("_CO_SSHOP_ITEM_TEL", "T�l�phone");
define("_CO_SSHOP_ITEM_TEL_DSC", "");
define("_CO_SSHOP_EXPIRATION_NOTICE_1", "Votre annonce expire dans 30 jours");
define("_CO_SSHOP_EXPIRATION_NOTICE_3", "Votre annonce est expir�e");
define("_CO_SSHOP_CAT_DEPENDENT_ATT_ID", "Dependent field");
define("_CO_SSHOP_CAT_DEPENDENT_ATT_ID_DSC", "If the options presented for this custom field are dependent of another existing custom field, please select this field here.");
define("_CO_SSHOP_NO_DEPENDENCY", "No dependency");
define("_CO_SSHOP_ITEM_NO_EXP", "Pas d'expiration");
define("_CO_SSHOP_ITEM_NO_EXP_DSC", "En choisissant 'Oui', la date d'expiration ci-dessous sera ignar�e et l'item n'expirera pas.");
define("_CO_SSHOP_TRANS_TRANSACTIONID", "Transaction ID");
define("_CO_SSHOP_TRANS_DATE", "Date");
define("_CO_SSHOP_TRANS_DATE_DSC", "");
define("_CO_SSHOP_TRANS_STATUS", "Status");
define("_CO_SSHOP_TRANS_STATUS_DSC", "");
define("_CO_SSHOP_TRANS_ITEMID", "Item");
define("_CO_SSHOP_TRANS_ITEMID_DSC", "");
define("_CO_SSHOP_TRANS_UID", "User");
define("_CO_SSHOP_TRANS_UID_DSC", "");
define("_CO_SSHOP_TRANS_PRICE", "Price");
define("_CO_SSHOP_TRANS_PRICE_DSC", "");
define("_CO_SSHOP_TRANS_CURRENCY", "Currency");
define("_CO_SSHOP_TRANS_CURRENCY_DSC", "");
define("_CO_SSHOP_TRANS_QUANTITY", "Quantity");
define("_CO_SSHOP_TRANS_QUANTITY_DSC", "");

define("_CO_SSHOP_TRANS_UNAME", "Username");
define("_CO_SSHOP_TRANS_VENDOR_ADP", "Vendor ADP");

?>