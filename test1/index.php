<?php 

require_once("includes/simpleUrl.php");

$url = new Simpleurl('');

//
if( !$url->segment(1) ) :

	$page = 'index';
	//echo $page;

else :
	
	$page = $url->segment(2); 


endif;