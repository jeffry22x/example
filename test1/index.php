<?php 
//ok lang change master
require_once("includes/simpleUrl.php");

$url = new Simpleurl('');

//
if( !$url->segment(1) ) :

	$page = 'indexxx change master';
	//echo $page;

else :
	
	$page = $url->segment(2); 


endif;