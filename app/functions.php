<?php 

//check if requested page exist
function page_exist($page)
{
	if(file_exists('page/'.$filename))
	{
	   return true;
	}
	return false;
}

function show404()
{
	include '404.php';
	die;
}

function render_page($page, $lang)
{
	if($page == '')
	{
		$page = 'home';
	}
	//check if page exist;
	if(!page_exist($page))
	{
		show_404();
	}
	//check if $page string is letter only if not - show 404.php (anti-exloit)
	if (ctype_alpha($page) === false)
	{
		show_404();
	}
	//check if lang exist
	if!(in_array($lang, $languages, true))
	{
		show_404();
	}
	include 'lang/'.$lang.'.php';
	include 'partial/head.php';
	include 'partial/header.php';
	include 'page/'.$page.'.php';
	include 'partial/footer.php';
}

?>
