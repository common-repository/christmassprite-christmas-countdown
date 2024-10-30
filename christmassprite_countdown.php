<?php
	
/**
 * Plugin Name: ChristmasSprite - Christmas CountDown
 * Plugin URI: http://www.christmassprite.com/christmas-countdown/ 
 * Description: Allow you to put nice flash banner with number of days till Christmas
 * Version 1.0
 * Author: ChristmasSprite.com
 * Author URI: http://www.christmassprite.com
 */
	

function christmassprite_countdown($type = 'ChristmasTree')
{
	switch($type) 
	{
		case 'ChristmasTree_Dutch': {
			$counter = "<div><embed src=\"".plugins_url('/christmassprite_countdown')."/ChristmasTree_Dutch.swf\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"300\" height=\"242\"></embed></div>";
		} break;
		case 'ChristmasTree':
		default: {
			$counter = "<div><embed src=\"".plugins_url('/christmassprite_countdown')."/ChristmasTree.swf\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"300\" height=\"242\"></embed></div>";		
		} break;
	}
	
	echo $counter;
}
	
?>