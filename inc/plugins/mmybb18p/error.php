<?php
/*
	project: Mobile MyBB 1.8 Premium (MMyBB18P)
	file:    MYBB_ROOT/inc/plugins/mmybb18p/error.php
	version: 1.0.0
	author:  Rickey Gu
	web:     http://flexplat.com
	email:   rickey29@gmail.com
*/

define('IN_MYBB', 1);

require_once '../../../global.php';

global $header, $footer, $theme, $headerinclude, $db, $templates, $lang, $mybb;


$error = $mybb->cookies['mybb']['m_error'];
my_setcookie('mybb[m_error]', '', -1);

$title = $mybb->cookies['mybb']['m_title'];
if ( !empty($title) )
{
	my_setcookie('mybb[m_title]', '', -1);
}


if(!$error)
{
	$error = $lang->unknown_error;
}

if(!$title)
{
	$title = $mybb->settings['bbname'];
}

$timenow = my_date('relative', TIME_NOW);
reset_breadcrumb();
add_breadcrumb($lang->error);


$pattern = '#<a[^>]*>\s*(.*)\s*</a>#i';
$error = preg_replace($pattern, '$1', $error);

$pattern = '#\s*<br\s/>\s*<br\s/>\s*#i';
$error = preg_replace($pattern, '  ', $error);

$pattern = '#\s*<p>\s*#i';
$error = preg_replace($pattern, '<br />', $error);


eval("\$errorpage = \"".$templates->get("error")."\";");
output_page($errorpage);

exit;