<?php 
//ok lang
require_once("includes/simpleUrl.php");

$url = new Simpleurl('');

//
if( !$url->segment(1) ) :

	$page = 'indexxx';
	//echo $page;

else :
	
	$page = $url->segment(2); 


endif;