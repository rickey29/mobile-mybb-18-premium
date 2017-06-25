<?php
/*
	project: Mobile MyBB 1.8 Premium (MMyBB18P)
	file:    MYBB_ROOT/inc/plugins/mmybb18p/redirect.php
	version: 1.0.0
	author:  Rickey Gu
	web:     http://flexplat.com
	email:   rickey29@gmail.com
*/

define('IN_MYBB', 1);

require_once '../../../global.php';

global $header, $footer, $mybb, $theme, $headerinclude, $templates, $lang;


$url = $mybb->cookies['mybb']['m_url'];
my_setcookie('mybb[m_url]', '', -1);

$pattern = '#^https://#i';
if ( !preg_match($pattern, $url) )
{
	$url = $mybb->settings['bburl'] . '/' . $url;
}

$message = $mybb->cookies['mybb']['m_message'];
if ( !empty($message) )
{
	my_setcookie('mybb[m_message]', '', -1);
}

$title = $mybb->cookies['mybb']['m_title'];
if ( !empty($title) )
{
	my_setcookie('mybb[m_title]', '', -1);
}

$force_redirect = !empty($mybb->cookies['mybb']['m_force_redirect']) ? true : false;
if ( $force_redirect )
{
	my_setcookie('mybb[m_force_redirect]', 0, -1);
}


if(!$message)
{
	$message = $lang->redirect;
}

$time = TIME_NOW;
$timenow = my_date('relative', $time);

if(!$title)
{
	$title = $mybb->settings['bbname'];
}


$pattern = '#<a[^>]*>\s*(.*)\s*</a>#i';
$message = preg_replace($pattern, '$1', $message);

$pattern = '#\s*<br\s/>\s*<br\s/>\s*#i';
$message = preg_replace($pattern, '  ', $message);


// Show redirects only if both ACP and UCP settings are enabled, or ACP is enabled, and user is a guest, or they are forced.
if($force_redirect == true || ($mybb->settings['redirects'] == 1 && ($mybb->user['showredirect'] == 1 || !$mybb->user['uid'])))
{
	$url = str_replace("&amp;", "&", $url);
	$url = htmlspecialchars_uni($url);

	eval("\$redirectpage = \"".$templates->get("redirect")."\";");
	output_page($redirectpage);
}
else
{
	$url = htmlspecialchars_decode($url);
	$url = str_replace(array("\n","\r",";"), "", $url);

	run_shutdown();

	if(!my_validate_url($url, true))
	{
		header("Location: {$mybb->settings['bburl']}/{$url}");
	}
	else
	{
		header("Location: {$url}");
	}
}

exit;