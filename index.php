<?php
include 'app/init.php';
include 'app/functions.php';
$get2 = str_replace("/", "", $get2);
//check if secound get is empty (page without language request aka site.com/page)
if($get2 == '')
{
	//check if it's localized root page aka site.com/lang
	if (in_array($get1, $languages, true))
	{
		//this page is root of lang so render home on lang
	    render_page("home",$get1);
	}
	else
	{	
		render_page($get1,DEFAULT_LANG);
	}
}
else
{
	//url is site.com/lang/page
	render_page($get2,$get1);
}
?>
