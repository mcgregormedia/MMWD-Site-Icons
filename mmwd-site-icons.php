<?php
/*
Plugin Name: MMWD Site Icons
Plugin URI: http://www.mcgregormedia.co.uk/projects/mmwd-site-icons
Description: Adds favicons and touch icons to your site. Get your icons at http://realfavicongenerator.net - make sure you name the download file "favicons". Unzip the folder, then upload it to your root folder and the plugin will do the rest.
Version: 1.0.3
Author: McGregor Media Web Design
Author URI: http://www.mcgregormedia.co.uk/
License: GPL2
 
MMWD Site Icons is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
MMWD Site Icons is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with MMWD Site Icons. If not, see http://www.gnu.org/licenses/gpl.html.
*/




function mmwd_add_favicons(){
	
	?>	
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/manifest.json">
	<link rel="mask-icon" href="<?php echo get_bloginfo( 'url' ) ?>/favicons/safari-pinned-tab.svg" color="#ef7f1b">
	<meta name="apple-mobile-web-app-title" content="Teesside Kitchens">
	<meta name="application-name" content="Teesside Kitchens">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_bloginfo( 'url' ) ?>/favicons/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<?php

}
add_action( 'wp_head', 'mmwd_add_favicons');