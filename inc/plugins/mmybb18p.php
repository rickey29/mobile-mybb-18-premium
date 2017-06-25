<?php
/*
	project: Mobile MyBB 1.8 Premium (MMyBB18P)
	file:    MYBB_ROOT/inc/plugins/mmybb18p.php
	version: 1.0.0
	author:  Rickey Gu
	web:     http://flexplat.com
	email:   rickey29@gmail.com
*/

// Disallow direct access to this file for security reasons
if ( !defined("IN_MYBB") )
{
	die("Direct initialization of this file is not allowed.");
}


$plugins->add_hook('error', 'mmybb18p_error');
$plugins->add_hook('forumdisplay_start', 'mmybb18p_forumdisplay_start');
$plugins->add_hook('global_end', 'mmybb18p_global_end');
$plugins->add_hook('global_intermediate', 'mmybb18p_global_intermediate');
$plugins->add_hook('global_start', 'mmybb18p_global_start');
$plugins->add_hook('index_end', 'mmybb18p_index_end');
$plugins->add_hook('member_login', 'mmybb18p_member_login');
$plugins->add_hook('member_login_end', 'mmybb18p_member_login_end');
$plugins->add_hook('member_profile_end', 'mmybb18p_member_profile_end');
$plugins->add_hook('member_register_end', 'mmybb18p_member_register_end');
$plugins->add_hook('member_register_start', 'mmybb18p_member_register_start');
$plugins->add_hook('newreply_start', 'mmybb18p_newreply_start');
$plugins->add_hook('newthread_start', 'mmybb18p_newthread_start');
$plugins->add_hook('postbit', 'mmybb18p_postbit');
$plugins->add_hook('postbit_announcement', 'mmybb18p_postbit_announcement');
$plugins->add_hook('postbit_pm', 'mmybb18p_postbit_pm');
$plugins->add_hook('pre_output_page', 'mmybb18p_pre_output_page');
$plugins->add_hook('redirect', 'mmybb18p_redirect');


function mmybb18p_info()
{
	return array(
		'name'          => 'Mobile MyBB 1.8 Premium',
		'description'   => 'Mobile MyBB 1.8 Premium (MMyBB18P) is a mobile-friendly, Accelerated Mobile Pages complied MyBB 1.8 theme.',
		'website'       => 'http://flexplat.com/mobile-mybb-18-premium',
		'author'        => 'Rickey Gu',
		'authorsite'    => 'http://flexplat.com',
		'version'       => '1.0.0',
		'guid'          => str_replace('.php', '', basename(__FILE__)),
		'codename'      => str_replace('.php', '', basename(__FILE__)),
		'compatibility' => '18*'
	);
}

function mmybb18p_install()
{
}

function mmybb18p_is_installed()
{
	$file = MYBB_ROOT . 'inc/plugins/mmybb18p/Mobile MyBB 1.8 Premium-theme.xml';
	if ( !file_exists($file) )
	{
		return false;
	}

	return true;
}

function mmybb18p_uninstall()
{
}

function mmybb18p_activate()
{
	require(MYBB_ADMIN_DIR . '/inc/functions_themes.php');

	$file = MYBB_ROOT . 'inc/plugins/mmybb18p/Mobile MyBB 1.8 Premium-theme.xml';
	if ( !file_exists($file) )
	{
		flash_message('Mobile MyBB 1.8 theme file is NOT exist.', 'error');
		admin_redirect('index.php?module=config/plugins');
	}

	$xml = @file_get_contents($file);
	if ( empty($xml) )
	{
		return;
	}

	$options = array(
		'force_name_check' => true,
		'version_compat' => 1,
		'no_templates' => 0,
		'parent' => 1,
		'no_stylesheets' => 1,
	);

	import_theme_xml($xml, $options);
}

function mmybb18p_deactivate()
{
	global $db;

	$name = 'Mobile MyBB 1.8 Premium';
	$query = $db->simple_select('themes', 'tid', 'name="' . $db->escape_string($name) . '"', array('limit' => 1));
	$theme = $db->fetch_array($query);
	$db->delete_query('themes', 'tid="' . $theme['tid'] . '"');

	$title = 'Mobile MyBB 1.8 Premium Templates';
	$query = $db->simple_select('templatesets', 'sid', 'title="' . $db->escape_string($title) . '"', array('limit' => 1));
	$templateset = $db->fetch_array($query);
	$db->delete_query('templatesets', 'sid="' . $templateset['sid'] . '"');
	$db->delete_query('templates', 'sid="' . $templateset['sid'] . '"');
}


function mmybb18p_inline_error($errors, $title)
{
	global $lang;

	if ( empty($errors) )
	{
		return;
	}

	if ( empty($title) )
	{
		$title = $lang->please_correct_errors;
	}

	$inline_error = '
<li data-theme="e" class="ui-li ui-li-static ui-btn-up-e">
' . $title;

	$pattern = '#<a[^>]*>\s*(.*)\s*</a>#i';
	$pattern2 = '#\s*<br\s/>\s*<br\s/>\s*#i';
	foreach ( $errors as $error )
	{
		$error = preg_replace($pattern, '$1', $error);
		$error = preg_replace($pattern2, '  ', $error);

		$inline_error .= '
<br />
' . $error;
	}

	$inline_error .= '
</li>';

	return $inline_error;
}

function mmybb18p_json($redirect)
{
	global $mybb;

	header('Content-type: application/json');
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Allow-Origin: *.ampproject.org');
	header('Access-Control-Expose-Headers: AMP-Redirect-To, AMP-Access-Control-Allow-Source-Origin');
	header('AMP-Access-Control-Allow-Source-Origin: ' . $mybb->settings['homeurl2']);
	header('AMP-Redirect-To: ' . $redirect);

	$output = [];
	echo json_encode($output);

	die();
}

function mmybb18p_update_user_theme()
{
	global $mybb;

	require_once MYBB_ROOT . 'inc/datahandlers/user.php';
	$userhandler = new UserDataHandler('update');

	$user = array(
		'uid' => $mybb->user['uid'],
		'style' => 0,
		'usergroup' => $mybb->user['usergroup'],
		'additionalgroups' => $mybb->user['additionalgroups']
	);

	$userhandler->set_data($user);

	if ( $userhandler->validate_user() )
	{
		$mybb->user['style'] = $user['style'];

		if ( $mybb->user['uid'] )
		{
			if ( isset($mybb->cookies['mybbtheme']) )
			{
				my_unsetcookie('mybbtheme');
			}

			$userhandler->update_user();
		}
		else
		{
			my_setcookie('mybbtheme', $user['style']);
		}
	}
}

function mmybb18p_update_mycode($post)
{
	$mycode_list = array(
		'<span style="font-weight: bold;" class="mycode_b">' => '<span id="bold-style">',
		'<span style="font-style: italic;" class="mycode_i">' => '<span id="italic-style">',
		'<span style="text-decoration: underline;" class="mycode_u">' => '<span id="underline-style">',
		'<span style="text-decoration: line-through;" class="mycode_s">' => '<span id="strikethrough-style">',
		'<div style="text-align: left;" class="mycode_align">' => '<div id="align-left-style">',
		'<div style="text-align: center;" class="mycode_align">' => '<div id="center-style">',
		'<div style="text-align: right;" class="mycode_align">' => '<div id="align-right-style">',
		'<div style="text-align: justify;" class="mycode_align">' => '<div id="justify-style">',
		'<span style="font-family: *;" class="mycode_font">' => '<span>',
		'<span style="font-size: *;" class="mycode_size">' => '<span>',
		'<span style="color: *;" class="mycode_color">' => '<span>',
		'<hr class="mycode_hr" />' => '<hr />',
		'<ul class="mycode_list">' => '<ul>',
		'<ol type="1" class="mycode_list">' => '<ol type="1">',
		'<span style="*">' => '<span>',
	);

	$mycode_list2 = array(
		'<img src="([^"]+)" width="([^"]+)" height="([^"]+)" alt="([^"]+)" class="mycode_img" />' =>
			'<span><amp-img src="$1" width="$2" height="$3" alt="$4" /></span>',
		'<img src="([^"]+)" alt="([^"]+)" class="mycode_img" />' => '<a href="$1" target="_blank">$2</a>',
		'<a href="([^"]+)" class="mycode_email">' => '<a href="$1">',
		'<a href="([^"]+)" target="_blank" class="mycode_url">' => '<a href="$1" target="_blank">',
		'<img src="([^"]+)" alt="([^"]+)" title="[^"]+" class="smilie [^"]+" />' =>
			'<span><amp-img src="$1" alt="$2" width="21" height="21" /></span>',
		'<div class="codeblock"><div class="title">([^<]+)</div><div class="body" dir="ltr"><code>(.*)</code></div></div>' =>
			'<div><div>$1</div><div dir="ltr"><code>$2</code></div></div>',
		'<div class="codeblock phpcodeblock"><div class="title">([^<]+)</div><div class="body"><div dir="ltr"><code>(.*)</code></div></div></div>' =>
			'<div><div>$1</div><div><div dir="ltr"><code>$2</code></div></div></div>',
		'<blockquote class="mycode_quote"><cite>([^<]+)</cite>(.*)</blockquote>' =>
			'<blockquote><cite>$1</cite>$2</blockquote>',
	);

	foreach ( $mycode_list as $key => $value )
	{
		$post = preg_replace('#' . str_replace('\*', '.*?', preg_quote($key, '#')) . '#i', $value, $post);
	}

	foreach ( $mycode_list2 as $key => $value )
	{
		$post = preg_replace('#' . $key . '#isU', $value, $post);
	}

	$pattern = '#<iframe[^>]* src="([^"]+)"[^>]*></iframe>#i';
	$post = preg_replace_callback($pattern, function($matches) {
			return '<a href="' . $matches[1] . '" target="_blank">[Video: ' . $matches[1] . ']</a>';
		}, $post);

	return $post;
}


function mmybb18p_error($error)
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	global $mybb;

	if ( $mybb->request_method == 'post' )
	{
		my_setcookie('mybb[m_error]', $error, 60);

		mmybb18p_json($mybb->settings['bburl'] . '/inc/plugins/mmybb18p/error.php');
	}

	$pattern = '#^\s*<!--\sstart:\s.+\s-->\s*#i';
	if ( preg_match($pattern, $error) )
	{
		return $error;
	}

	$pattern = '#<a[^>]*>\s*(.*)\s*</a>#i';
	$error = preg_replace($pattern, '$1', $error);

	$pattern = '#\s*<br\s/>\s*<br\s/>\s*#i';
	$error = preg_replace($pattern, '  ', $error);

	$pattern = '#\s*<p>\s*#i';
	$error = preg_replace($pattern, '<br />', $error);

	return $error;
}

function mmybb18p_forumdisplay_start()
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	global $mybb;

	if ( empty($mybb->input['pwverify']) )
	{
		$pwverify = $mybb->cookies['mybb']['m_pwverify'];
		if ( !empty($pwverify) )
		{
			$mybb->input['pwverify'] = $pwverify;
			my_setcookie('mybb[m_pwverify]', '', -1);
		}
	}
}

function mmybb18p_global_end()
{
	if ( defined('MMYBB18P') )
	{
		return;
	}

	global $headerinclude;

	$amphtml_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	$pattern = '#(<meta http-equiv="Content-Script-Type" content="text/javascript" />)#i';
	$headerinclude = preg_replace($pattern, '$1' . "\n" . '<link rel="amphtml" href="' . $amphtml_url . '" />', $headerinclude);
}

function mmybb18p_global_intermediate()
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	global $mybb, $lang, $templates;
	global $header_personal;

	$pattern = '#&__amp_source_origin.+$#i';
	$_SERVER['REQUEST_URI'] = preg_replace($pattern, '', $_SERVER['REQUEST_URI']);

	$pattern = '#^http://#i';
	$mybb->settings['bburl'] = preg_replace($pattern, 'https://', $mybb->settings['bburl']);
	$mybb->settings['homeurl'] = preg_replace($pattern, 'https://', $mybb->settings['homeurl']);

	$pattern = '#/$#i';
	$mybb->settings['homeurl2'] = preg_replace($pattern, '', $mybb->settings['homeurl']);

	$mybb->settings['canonical_url'] = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if ( !empty($lang->personal_header) )
	{
		eval('$header_personal = "' . $templates->get('header_personal') . '";');
	}

	$request_method = $mybb->cookies['mybb']['m_request_method'];
	if ( !empty($request_method) )
	{
		$mybb->request_method = $request_method;
		my_setcookie('mybb[m_request_method]', '', -1);
	}
}

function mmybb18p_global_start()
{
	global $mybb, $db, $lang;

	if ( defined("IN_ADMINCP") )
	{
		return;
	}

	$name = 'Mobile MyBB 1.8 Premium';
	$query = $db->simple_select('themes', 'tid', 'name="' . $db->escape_string($name) . '"', array('limit' => 1));
	$theme = $db->fetch_array($query);
	if ( empty($theme) )
	{
		return;
	}
	$mobile_tid = $theme['tid'];

	$query = $db->simple_select('themes', 'tid', 'def=1', array('limit' => 1));
	$theme = $db->fetch_array($query);
	if ( empty($theme) )
	{
		return;
	}
	$default_tid = $theme['tid'];

	if ( isset($mybb->input['theme']) )
	{
		$mybb->input['theme'] = (int)$mybb->input['theme'];

		if ( $mybb->input['theme'] == $mobile_tid )
		{
			$mybb_redirection = 'mobile';
		}
		elseif ( $mybb->input['theme'] != 0 && $mybb->input['theme'] != $default_tid )
		{
			return;
		}
	}
	elseif ( $mybb->user['uid'] )
	{
		$mybb->user['style'] = (int)$mybb->user['style'];

		if ( $mybb->user['style'] == $mobile_tid )
		{
			$mybb_style = 'mobile';
		}
		elseif ( $mybb->user['style'] != 0 && $mybb->user['style'] != $default_tid )
		{
			return;
		}
	}
	else
	{
		$mybb->cookies['mybbtheme'] = (int)$mybb->cookies['mybbtheme'];

		if ( $mybb->cookies['mybbtheme'] == $mobile_tid )
		{
			$mybb_style = 'mobile';
		}
		elseif ( $mybb->cookies['mybbtheme'] != 0 && $mybb->cookies['mybbtheme'] != $default_tid )
		{
			return;
		}
	}

	$redirection = !empty($mybb->input['m-redirection']) ? $mybb->input['m-redirection'] : '';
	$style = !empty($mybb->cookies['mybb']['m_style']) ? $mybb->cookies['mybb']['m_style'] : '';

	if ( !empty($mybb_redirection) )
	{
		$device = $mybb_redirection;

		// make the cookie expires right now
		my_setcookie('mybb[m_style]', '', -1);
	}
	elseif ( !empty($redirection) )
	{
		$device = $redirection != 'mobile' ? 'desktop' : 'mobile';

		// make the cookie expires in a year time: 60 * 60 * 24 * 365 = 31,536,000
		my_setcookie('mybb[m_style]', $device);

		if ( !empty($mybb_style) )
		{
			mmybb18p_update_user_theme();
		}
	}
	elseif ( !empty($mybb_style) )
	{
		$device = $mybb_style;

		// make the cookie expires right now
		my_setcookie('mybb[m_style]', '', -1);
	}
	elseif ( !empty($style) )
	{
		$device = $style != 'mobile' ? 'desktop' : 'mobile';

		// make the cookie expires in a year time: 60 * 60 * 24 * 365 = 31,536,000
		my_setcookie('mybb[m_style]', $device);
	}
	else
	{
		require(MYBB_ROOT . 'inc/plugins/mmybb18p/lib/detection.php');

		$data = array();
		$data['user_agent'] = !empty($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
		$data['accept'] = !empty($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : '';
		$data['profile'] = !empty($_SERVER['HTTP_PROFILE']) ? $_SERVER['HTTP_PROFILE'] : '';
		$device = mmybb18p_get_device($data);

		$device = ( $device == 'desktop' || $device == 'bot' ) ? 'desktop' : 'mobile';

		// make the cookie expires in a year time: 60 * 60 * 24 * 365 = 31,536,000
		my_setcookie('mybb[m_style]', $device);
	}

	if ( $device != 'mobile' )
	{
		return;
	}

	define('MMYBB18P', 'Mobile');

	$mybb->user['style'] = $mobile_tid;

	$lang->load('mmybb18p');
}

function mmybb18p_index_end()
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	global $lang, $templates;
	global $footer_personal;

	if ( !empty($lang->personal_footer) )
	{
		eval('$footer_personal = "' . $templates->get('footer_personal') . '";');
	}
}

function mmybb18p_member_login()
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	global $mybb;
	global $errors, $validated, $do_captcha;

	if ( !isset($validated) )
	{
		$errors = unserialize($mybb->cookies['mybb']['m_errors']);
		if ( !empty($errors) )
		{
			my_setcookie('mybb[m_errors]', '', -1);
		}

		$do_captcha = !empty($mybb->cookies['mybb']['m_do_captcha']) ? true : false;
		if ( $do_captcha )
		{
			my_setcookie('mybb[m_do_captcha]', 0, -1);
		}
	}
}

function mmybb18p_member_login_end()
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	global $mybb;
	global $errors, $title, $inline_errors, $member_loggedin_notice, $validated, $do_captcha;

	if ( isset($validated) && !$validated )
	{
		if ( !empty($errors) )
		{
			my_setcookie('mybb[m_errors]', serialize($errors), 60);
		}

		if ( $do_captcha )
		{
			my_setcookie('mybb[m_do_captcha]', 1, 60);
		}

		mmybb18p_json($mybb->settings['bburl'] . '/member.php?action=login');
	}

	$inline_errors = mmybb18p_inline_error($errors, $title);

	$pattern = '#<a[^>]*>\s*(.*)\s*</a>#i';
	$member_loggedin_notice = preg_replace($pattern, '$1', $member_loggedin_notice);
}

function mmybb18p_member_profile_end()
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	global $warning_level, $bannedbit;

	$pattern = '#<span[^>]*>\s*(.*)\s*</span>#i';
	$warning_level = preg_replace($pattern, '$1', $warning_level);
	$bannedbit = preg_replace($pattern, '$1', $bannedbit);

	$pattern = '#<a\shref="([^"]*)"[^>]*>\s*(.*)\s*</a>#i';
	$bannedbit = preg_replace($pattern, '<a href="' . '$1' . '" rel="external">' . '$2' . '</a>', $bannedbit);
}

function mmybb18p_member_register_end()
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	global $errors, $title, $regerrors;

	$regerrors = mmybb18p_inline_error($errors, $title);
}

function mmybb18p_member_register_start()
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	global $mybb;
	global $errors;

	$member_register = !empty($mybb->cookies['mybb']['m_member_register']) ? true : false;
	if ( !$member_register )
	{
		if ( !empty($errors) )
		{
			my_setcookie('mybb[m_errors]', serialize($errors), 60);
		}

		my_setcookie('mybb[m_member_register]', 1, 60);
		my_setcookie('mybb[m_request_method]', 'post', 60);

		mmybb18p_json($mybb->settings['bburl'] . '/member.php?action=register&agree=1');
	}
	else
	{
		$errors = unserialize($mybb->cookies['mybb']['m_errors']);
		if ( !empty($errors) )
		{
			my_setcookie('mybb[m_errors]', '', -1);
		}

		my_setcookie('mybb[m_member_register]', 0, -1);
	}
}

function mmybb18p_newreply_start()
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	global $mybb, $lang;
	global $post_errors, $title, $reply_errors, $tid;

	if ( !empty($post_errors) )
	{
		my_setcookie('mybb[m_post_errors]', serialize($post_errors), 60);

		mmybb18p_json($mybb->settings['bburl'] . '/newreply.php?tid=' . $tid . '&amp;processed=1');
	}
	else
	{
		$post_errors = unserialize($mybb->cookies['mybb']['m_post_errors']);
		if ( !empty($post_errors) )
		{
			my_setcookie('mybb[m_post_errors]', '', -1);
		}
	}

	$pattern = '#</?(b|strong)>#i';
	$lang->options_sig = preg_replace($pattern, '', $lang->options_sig);
	$lang->options_disablesmilies = preg_replace($pattern, '', $lang->options_disablesmilies);
	$lang->close_thread = preg_replace($pattern, '', $lang->close_thread);
	$lang->stick_thread = preg_replace($pattern, '', $lang->stick_thread);

	$reply_errors = mmybb18p_inline_error($post_errors, $title);
}

function mmybb18p_newthread_start()
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	global $mybb, $lang;
	global $post_errors, $title, $thread_errors, $fid;

	if ( !empty($post_errors) )
	{
		my_setcookie('mybb[m_post_errors]', serialize($post_errors), 60);

		mmybb18p_json($mybb->settings['bburl'] . '/newthread.php?fid=' . $fid . '&amp;processed=1');
	}
	else
	{
		$post_errors = unserialize($mybb->cookies['mybb']['m_post_errors']);
		if ( !empty($post_errors) )
		{
			my_setcookie('mybb[m_post_errors]', '', -1);
		}
	}

	$pattern = '#</?(b|strong)>#i';
	$lang->options_sig = preg_replace($pattern, '', $lang->options_sig);
	$lang->options_disablesmilies = preg_replace($pattern, '', $lang->options_disablesmilies);
	$lang->close_thread = preg_replace($pattern, '', $lang->close_thread);
	$lang->stick_thread = preg_replace($pattern, '', $lang->stick_thread);

	$thread_errors = mmybb18p_inline_error($post_errors, $title);
}

function mmybb18p_postbit($post)
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	$post = mmybb18p_update_mycode($post);

	return $post;
}

function mmybb18p_postbit_announcement($post)
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	$post = mmybb18p_update_mycode($post);

	return $post;
}

function mmybb18p_postbit_pm($post)
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	$post = mmybb18p_update_mycode($post);

	return $post;
}

function mmybb18p_pre_output_page($contents)
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	global $mybb;

	if ( $mybb->request_method == 'post' )
	{
		if ( !empty($mybb->input['pwverify']) )
		{
			my_setcookie('mybb[m_pwverify]', $mybb->get_input('pwverify'), 60);

			mmybb18p_json($mybb->settings['homeurl2'] . $_SERVER['REQUEST_URI']);
		}
	}

	$pattern = '#<!--.*-->#i';
	$contents = preg_replace($pattern, '', $contents);

	$pattern = '#<title>\s*(.*)\s*</title>#i';
	if ( preg_match($pattern, $contents, $matches) )
	{
		$pattern2 = '#(<h1[^>]*>).*(</h1>)#i';
		$contents = preg_replace($pattern2, '${1}' . $matches[1] . '${2}', $contents);
	}

	$pattern = '#<p[^>]*>\s*</p>#i';
	$contents = preg_replace($pattern, '', $contents);


	require(MYBB_ROOT . 'inc/plugins/mmybb18p/lib/style.php');

	$contents = mmybb18p_update_style($contents);


	$contents = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $contents);

	return $contents;
}

function mmybb18p_redirect($redirect_args)
{
	if ( !defined('MMYBB18P') )
	{
		return;
	}

	global $mybb;
	global $force_redirect;

	if ( $mybb->request_method == 'post' )
	{
		my_setcookie('mybb[m_url]', $redirect_args['url'], 60);

		if ( !empty($redirect_args['message']) )
		{
			my_setcookie('mybb[m_message]', $redirect_args['message'], 60);
		}

		if ( !empty($redirect_args['title']) )
		{
			my_setcookie('mybb[m_title]', $redirect_args['title'], 60);
		}

		if ( $force_redirect )
		{
			my_setcookie('mybb[m_force_redirect]', 1, 60);
		}

		mmybb18p_json($mybb->settings['bburl'] . '/inc/plugins/mmybb18p/redirect.php');
	}

	$pattern = '#<a[^>]*>\s*(.*)\s*</a>#i';
	$redirect_args['message'] = preg_replace($pattern, '$1', $redirect_args['message']);

	$pattern = '#\s*<br\s/>\s*<br\s/>\s*#i';
	$redirect_args['message'] = preg_replace($pattern, '  ', $redirect_args['message']);

	return $redirect_args;
}