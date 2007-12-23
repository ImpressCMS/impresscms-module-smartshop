<?php
if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

include_once XOOPS_ROOT_PATH . "/class/xoopstree.php";
include_once XOOPS_ROOT_PATH . "/class/xoopslists.php";
include_once XOOPS_ROOT_PATH . "/class/xoopsformloader.php";

if(!isset($categoryid)) $categoryid = 0;

$sform = new XoopsThemeForm(_MD_SSHOP_SEARCH , "form", XOOPS_URL."/modules/smartshop/search.php", 'POST');
$sform->setExtra('enctype="multipart/form-data"');

// Category
$smartpermissions_handler = new SmartobjectPermissionHandler($smartshop_category_handler);
$grantedCats = $smartpermissions_handler->getGrantedItems('category_view');
$criteria = new CriteriaCompo();
$criteria->add(new Criteria('searchable', 1));
$criteria->add(new Criteria('categoryid', '('.implode(', ',$grantedCats).')', 'IN'));

$categoriesArray = $smartshop_category_handler->getList($criteria);
unset($criteria);
$newArray = array();
foreach($categoriesArray as $k=>$v) {
	$newArray[$k] = $myts->displayTarea($v);
}

$categoriesArray=$newArray;

if($xoopsModuleConfig['cat_inputtype_search'] == 'radio'){
	$category_select = new XoopsFormRadio(_MD_SSHOP_CATEGORY, 'categoryid', $categoryid);
}else{
	$category_select = new XoopsFormSelect(_MD_SSHOP_CATEGORY, 'categoryid', $categoryid);
}
$category_select->setDescription(_MD_SSHOP_CATEGORY_DSC);
$category_select->addOption(0, _MD_SSHOP_SEARCH_ALL);
$category_select->addOptionArray($categoriesArray);
$category_select->setExtra("onchange='submit()'");
$sform->addElement($category_select);

// ITEM TITLE
$title_text = new XoopsFormText(_MD_SSHOP_TITLE, 'title', 30, 255, $title);
$title_text->setDescription(_MD_SSHOP_TITLE_SEARCH_DSC);
$sform->addElement($title_text);

// ITEM Desc
if(in_array('description', $xoopsModuleConfig['display_fields'])){
	$desc_text = new XoopsFormText(_MD_SSHOP_DESCRIPTION, 'desc', 30, 255, $desc);
	$desc_text->setDescription(_MD_SSHOP_DESC_SEARCH_DSC);
	$sform->addElement($desc_text);
}



$criteria = new CriteriaCompo();
$criteria->add(new Criteria('parentid', '('.$categoryid.', 0)', 'IN'));
$criteria->add(new Criteria('searchable', 1));
$criteria->setSort('weight');
$criteria->setOrder('ASC');
$attObjs = $smartshop_category_attribut_handler->getObjects($criteria);

foreach($attObjs as $att){
	if($att->getVar('searchable')){
		$att_type = $att->getVar('att_type', 'n');
		$att_caption = $att->getVar('caption');
		$att_name = $att->getVar('name');
		$att_desc = $att->getVar('description');
		switch($att_type){

			case 'check':

			$check_box = new XoopsFormCheckbox($att_caption, $att_name);
			$check_box->addOptionArray($att->getOptionsArray());
			$check_box->setDescription($att_desc);
			$sform->addElement($check_box);
			unset($check_box);
			break;

			case 'select_multi':

			$select_multi = new XoopsFormSelect($att_caption, $att_name, null, $att->getVar('size'), true);
			$select_multi->addOptionArray($att->getOptionsArray());
			$select_multi->setDescription($att_desc);
			$sform->addElement($select_multi);
			unset($select_multi);
			break;

			case 'html':
			case 'text':
			case 'tarea':

			$text_box = new XoopsFormText($att_caption, $att_name, 30, 255);
			$text_box->setDescription($att_desc);
			$sform->addElement($text_box);
			unset($text_box);
			break;

			case('radio'):

			$radio_box = new XoopsFormRadio($att_caption, $att_name, 'Any');
			$radio_box->addOption('Any', _MD_SSHOP_ANY);
			$radio_box->addOptionArray($att->getOptionsArray());
			$radio_box->setDescription($att_desc);
			$sform->addElement($radio_box);
			unset($radio_box);
			break;

			case('select'):

			$select_box = new XoopsFormSelect($att_caption, $att_name, 'Any');
			$select_box->addOption('Any', _MD_SSHOP_ANY);
			$select_box->addOptionArray($att->getOptionsArray());
			$select_box->setDescription($att_desc);
			$sform->addElement($select_box);
			unset($select_box);
			break;

			case('yn'):

			$yesno_box = new XoopsFormRadio($att_caption, $att_name, 'Any');
			$yesno_box->addOptionArray(array(0 => _MD_SSHOP_NO, 1 => _MD_SSHOP_YES, 'Any' => _MD_SSHOP_ANY));
			$yesno_box->setDescription($att_desc);
			$sform->addElement($yesno_box);
			unset($yesno_box);
			break;
		}
	}
}
//-----------------------------------
$search_type_yn = new XoopsFormRadioYN(_MD_SSHOP_SEARCH_ANDOR, 'andor', 1);
$search_type_yn->setDescription(_MD_SSHOP_SEARCH_ANDOR_DSC);
$sform->addElement($search_type_yn);

$button_tray = new XoopsFormElementTray('', '');

$hidden = new XoopsFormHidden('op', 'form');
$button_tray->addElement($hidden);

$butt_search = new XoopsFormButton('', 'post', _MD_SSHOP_SEARCH, 'submit');
$butt_search->setExtra('onclick="this.form.elements.op.value=\'post\'"');
$button_tray->addElement($butt_search);

$sform->addElement($button_tray);

$sform->assign($xoopsTpl);

?>