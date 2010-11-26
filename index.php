<?php

/**
 * Prettify - Google Code Syntax Highlighter
 * Prettify is free for non-profit usage.
 * @package wolf
 * @subpackage plugin.prettify
 *
 * @author Sanja Andjelkovic <sanja@medio.com.hr>
 * @author Dejan Andjelkovic <dejan@medio.com.hr>
 * @version 0.0.1
 * @for Wolf version 0.5.5 and above
 * @license http://www.gnu.org/licenses/gpl.html GPL License
 * @copyright medio.com.hr, 2010
 */
 
Plugin::setInfos(array(
    'id'          => 'prettify',
    'title'       => 'Prettify',
    'description' => 'Google Code Prettify Syntax Highlighter',
    'version'     => '0.0.1',
	'license'     => 'GPL',
	'author'      => 'Dejan Andjelkovic',	
    'website'     => 'http://project79.net/',
	'update_url'  => 'http://www.project79.net/plugin-versions.xml',
	'require_wolf_version' => '0.5.5'
));

// funkcija poziva css i js
function prettify(){
	//putanje
	$jspath = BASE_URL.'wolf/plugins/prettify/';
	$csspath = BASE_URL.'wolf/plugins/prettify/';
		
	// loadaj
	echo '<script type="text/javascript" src="',$jspath,'prettify.js"></script>',"\n";
	echo '<script type="text/javascript" src="',$jspath,'lang-css.js"></script>',"\n";
	echo '<link href="',$csspath,'prettify.css" rel="stylesheet" type="text/css">',"\n";
}
?>