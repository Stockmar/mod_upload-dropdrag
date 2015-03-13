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

$path = '/modules/mod_upload-dropdrag/';

$dir = JFolder::files($folder);

// 	add the stylesheet
$doc->addStylesheet('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
$doc->addStylesheet( JURI::root(true) . $path .'css/jquery.fileupload.css' );
$doc->addStylesheet( JURI::root(true) . $path .'css/style.css' );




// 	add the jquery
//$doc->addScript('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');

// 	The jQuery UI widget factory, can be omitted if jQuery UI is already included
$doc->addScript(JURI::root(true) . $path . 'js/vendor/jquery.ui.widget.js');

// The Templates plugin is included to render the upload/download listings
$doc->addScript('//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js');

//	The Load Image plugin is included for the preview images and image resizing functionality
$doc->addScript('//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js');

// 	The Canvas to Blob plugin is included for image resizing functionality
$doc->addScript('//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js');

// 	Bootstrap JS is not required, but included for the responsive demo navigation
//$doc->addScript('//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js');

// 	blueimp Gallery script
$doc->addScript('//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js');

//	The Iframe Transport is required for browsers without support for XHR file uploads
$doc->addScript(JURI::root(true) . $path .'js/jquery.iframe-transport.js');

// 	The basic File Upload plugin
$doc->addScript(JURI::root(true) . $path .'js/jquery.fileupload.js');

// 	The File Upload processing plugin
$doc->addScript(JURI::root(true) . $path .'js/jquery.fileupload-process.js');

// 	The File Upload image preview & resize plugin
$doc->addScript(JURI::root(true) . $path .'js/jquery.fileupload-image.js');

// 	The File Upload audio preview plugin
$doc->addScript(JURI::root(true) . $path .'js/jquery.fileupload-audio.js');

// 	The File Upload video preview plugin
$doc->addScript(JURI::root(true) . $path .'js/jquery.fileupload-video.js');

// 	The File Upload validation plugin
$doc->addScript(JURI::root(true) . $path .'js/jquery.fileupload-validate.js');

// The File Upload user interface plugin
$doc->addScript(JURI::root(true) . $path .'js/jquery.fileupload-ui.js');

$doc->addScript(JURI::root(true) . $path .'js/main.js');

// 	Add styles // IF ANY
//	$style = ' CSS IN HERE';
//	$doc->addStyleDeclaration($style);


$DropDragItemsParms = ModDropDragHelper::getData( $params );
require JModuleHelper::getLayoutPath('mod_upload-dropdrag', $params->get('layout', 'default'));

?>