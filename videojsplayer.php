<?php

/**
 * VideoJsPlayer extension
 *
 * 
 *
 * This file contains the main include file for the VideoJsPlayer extension of
 * MediaWiki.
 *
 * Usage: Add the following line in LocalSettings.php:
 * require_once "$IP/extensions/videojsplayer/videojsplayer.php";
 *
 * @author Aalekh Nigam <aalekh.nigam@gmail.com>
 *  
 * @copyright <2013> Aalekh Nigam
 * @license http://www.gnu.org/copyleft/gpl.html The MIT License (MIT) 
 * @version 0.1
 */


$wgAutoloadClasses['VideoJsPlayer'] = $IP . '/extensions/videojsplayer/videojsplayer_body.php';
$wgHooks['ParserFirstCallInit'][] = 'VideoJsPlayer::onParserInit';
$wgResourceModules['ext.videojsplayer'] = array(
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'VideoJsPlayer',
	'scripts' => array('resources/video.dev.js','resources/video.js'),
	'styles' => array('resources/video-js.css','resources/video.css'),
	'dependencies' => array('.DS_STORE','vjs.eot','vjs.svg','vjs.woff', 'demo.captions.vtt','video-js.swf','vjs.ttf')
);
