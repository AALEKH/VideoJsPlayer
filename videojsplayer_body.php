<?php
class VideoJsPlayer {
	static function onParserInit( Parser $parser ) {
		
		global $wgOut;
        
        $wgOut->addModules( 'ext.videojsplayer' );
		/*parser loads stylesheet and scripts through this ext.addmodule*/
		$parser->setHook( 'videojsplayer', array( 'VideoJsPlayer', 'videojsplayerRender' ) ); 
		/*sethook() initializes the parser function n encountering videojsplayer tag */
		return true;
	}
	static function videojsplayerRender( $input, array $args, Parser $parser, PPFrame $frame ) {
		 
        /*makeoutput variable is used to output the html equivalent needed to insert videojsplayer*/

		$makeoutput = '<video id="example_video_1" class="video-js vjs-default-skin"controls preload="auto" width="'.htmlspecialchars($args['width']).'" height="'.htmlspecialchars($args['height']).'"poster="" data-setup="{"example_option":true}">';
		
		$makeoutput .= '<source src="'.htmlspecialchars($args['sourcemp4']).'" type="video/mp4" /><source src="'.htmlspecialchars($args['sourcewebm']).'" type="video/webm" /><source src="'.htmlspecialchars($args['sourceogv']).'" type="video/ogg" />';
		
		$makeoutput .= '</video>';
		
		return $makeoutput;
	}
}
