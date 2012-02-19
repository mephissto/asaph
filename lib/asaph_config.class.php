<?php

class Asaph_Config {

	// This title is used in templates and the rss feed
	public static $title = 'Asaph ~ Phoboslab';

	// Domain name and path where Asaph is installed in
	public static $domain = 'subdomain.yourdomain.com';
	public static $absolutePath = '/asaph/';

	// If you want to be able to move/edit/delete generated files and folders 
	// with your ftp-client, it's likely you'll have to set chmod to 0777
	public static $defaultChmod = 0777;

	public static $postsPerPage = 9;
	public static $adminPostsPerPage = 9;

	// Templates
	public static $templates = array(
		'posts' 	=> 'templates/whiteout/posts.html.php',
		'about' 	=> 'templates/whiteout/about.html.php',
		'post' 		=> 'templates/whiteout/post.html.php',
		'404'		=> 'templates/whiteout/404.html.php',
		'feed' 		=> 'templates/rss.xml.php'
	);
	
	// Date format to display
	public static $date_format = 'j/n/y';
	
	// If you set an URL here, it will override the default one but the default will still be available.
	// Left it empty if you want the default or replace by the URL you want to use (a feedburner one for example).
	public static $feed_url = "";
	
	// The URL to your twitter account, if you don't want to show your twitter account
	// just left it empty if you don't want to display it
	public static $twitter_account = "";
	
	// If you want to add specific link, just set the variables $link1 $link2 and $link3
	// and here is an example how to set the variables
	
	// public static $link1 = array(
	//	'title'		=> 'Google',
	//	'url'		=> 'http://www.google.com'
	//);

	public static $link1 = array();
	
	public static $link2 = array();
	
	public static $link3 = array();
	
	// URL to ping
	public static $urlToPing = "http://www.google.com";
	
	// Google Analytics
	public static $googleAnalytics = "";
	
	// Settings for your mysql database
	public static $db = array(
		'host' => 'localhost',
		'database' => 'asaph',
		'user' => 'root',
		'password' => '',
		'prefix' => 'asaph_'
	);
	
	// Image and thumbnail settings
	public static $images = array(
		'imagePath' => 'data/images/',
		'thumbPath' => 'data/thumbs/',
		'thumbWidth' => 256,
		'thumbHeight' => 192,
		'jpegQuality' => 80,
	);
}


// Don't edit anything below here, unless you know what you're doing

define( 'ASAPH_TABLE_POSTS',	Asaph_Config::$db['prefix'].'posts' );
define( 'ASAPH_TABLE_USERS',	Asaph_Config::$db['prefix'].'users' );

define( 'ASAPH_BASE_URL',		'http://'.Asaph_Config::$domain.Asaph_Config::$absolutePath );
define( 'ASAPH_POST_PHP',		ASAPH_BASE_URL.'admin/post.php' );
define( 'ASAPH_POST_JS',		ASAPH_BASE_URL.'admin/post.js.php' );
define( 'ASAPH_POST_CSS',		ASAPH_BASE_URL.'admin/templates/post.css' );
define( 'ASAPH_INSTALL',		ASAPH_BASE_URL.'admin/install.php' );

if( function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc() ) {
	$_GET = array_map( 'stripslashes', $_GET );
	$_POST = array_map( 'stripslashes', $_POST );
}

if( empty(Asaph_Config::$feed_url) ) {
	Asaph_Config::$feed_url = ASAPH_BASE_URL.'?feed';
}

?>
