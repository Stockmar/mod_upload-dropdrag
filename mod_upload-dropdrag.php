<?php
/*
* Version			: 1.0
* Created by		: Stockmar
* Email				: info@stockmar.dk
* Created on		: 13-03-2015
* URL				: http://stockmar.dk
* License			: GPLv2
* Copyright			: 2015 stockmar.dk
* License 			: GPLv2 http://www.gnu.org/licenses/gpl-2.0.html
*/

defined('_JEXEC') or die;


// 	Include the helper.
 require_once __DIR__ . '/helper.php';
jimport('joomla.filesystem.folder');


// 	Load the method jquery script.
JHtml::_('jquery.framework');
$doc =& JFactory::getDocument();

// 	Get parms from module



$dir = JFolder::files($folder);

// 	add the stylesheet
$doc->addStylesheet('maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
$doc->addStylesheet( JURI::root(true) . '/modules/mod_upload-dropdrag/css/style.css' );
// 	add the jquery
$doc->addScript('maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js');
$doc->addScript( JURI::root(true) . '/modules/mod_upload-dropdrag/js/??????.js');


// 	Add styles // IF ANY
//	$style = ' CSS IN HERE';
//	$doc->addStyleDeclaration($style);


$DropDragItemsParms = ModDropDragHelper::getData( $params );
require JModuleHelper::getLayoutPath('mod_upload-dropdrag', $params->get('layout', 'default'));

?>