<?php
//server side of ajax example
if (isset($_POST['url']))
{
	//loads web page supplied via post variable, after sanitizing the input
	echo file_get_contents('http://' . SanitizeString($_POST['url']));
}


function SanitizeString($var)
{
	$var = strip_tags($var);
	$var = htmlentities($var);
	return stripslashes($var);
}