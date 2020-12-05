<?php

/** 
    * @package IPTestPlugin
*/
/* 
Plugin Name: IPTest Plugin
Plugin URI: http://yourpassionweb.com
Description: First attempt to make a Wordpress plugin, this one shows the user's ip on the home page
Version: 1.0.0
Author: Daryl Olivares
Author URI: https://www.linkedin.com/in/dolivaresg/
License: GPLv2 or later
Text Domain: IPTest Plugin
*/

function get_ip() {
	if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return apply_filters( 'wpb_get_ip', $ip );
        
    return wptexturize( $ip);
}

function Show_IP() {
	$ip = get_ip();
	printf(
		'<p id="ipcss" style="	
    		float: left;
            position: relative;
    		padding: 5px 10px;
    		font-size: 25px;
    		line-height: 1.6666;"><span dir="ltr">%s</span></p>',$ip
	);
}

add_action( 'wp_footer', 'Show_IP' );

function ip_css() {
	echo "
	<style type='text/css'>
	#ipcss {
		float: middle;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
		
	}
	.rtl #ipcss {
		float: left;
	}
	.block-editor-page #ipcss {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#ipcss,
		.rtl #ipcss {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'ip_css' );
/*Extra: Durante la caída del servidor se estaba desarrollando un plugin que permitía mostrar en la página, la IP desde donde se conecta el usuario. 
Este plugin no se pudo implementar debido a la caída del servidor. 
Si es que cuentas con tiempo suficiente para desarrollar esta funcionalidad, sumarías puntos extras con el desafío. 
Pero no es un requerimiento para completar el desafio */
