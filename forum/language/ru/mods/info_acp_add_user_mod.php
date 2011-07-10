<?php
/**
* @author Rich McGirr (RMcGirr83) http://phpbbmodders.net
* @author David Lewis (Highway of Life) http://phpbbacademy.com
*
* @package acp
* @version $Id:
* @copyright (c) 2011 phpBB Modders
* @copyright (c) 2007 Star Trek Guide Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_ACCOUNT_ADDED'			=> 'The user account has been created. The user may now login with the username and password sent to the email address you provided.',
	'ACP_ACCOUNT_INACTIVE'		=> 'The user account has been created. However, the forum settings require the user to activate their account.<br />An activation key has been sent to the email address you provided for the user.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'The account has been created. However, the forum settings require account activation by an administrator.<br />An email has been sent to the Administrators and the user will be informed when their account has been activated',
	'ACP_ADD_USER'				=> 'ACP Add User Mod',
	'ACP_ADMIN_ACTIVATE'		=> 'An email will be dispatched to an Administrator for account activation, alternatively you may check the activate account box below to activate the account instantly once created. The user will receive an email containing account login details.',
	'ACP_EMAIL_ACTIVATE'		=> 'Как только учетная запись будет создана, пользователь получит письмо с ссылкой для активации.',
	'ACP_INSTANT_ACTIVATE'		=> 'Учетная запись будет сразу же активирована. Пользователь получит письмо с логином и паролем.',

	'ADD_USER'					=> 'Добавление нового пользователя',
	'ADD_USER_EXPLAIN'			=> 'Создание новой учетной записи пользователя. Если в настройках регистрации выбран режим активации администратором, Вы также сразу же сможете активировать пользователя.',
	'ADMIN_ACTIVATE'			=> 'Активировать учетную запись',
	'CONFIRM_PASSWORD'			=> 'Подтвердите пароль',
	'EDIT_USER_GROUPS'			=> '%sClick here to edit the usergroups for this user%s',

	'CONTINUE_EDIT_USER'		=> '%1$sClick here to the manage %2$s’s profile%3$s', // e.g.: Click here to edit Joe’s profile.
	'LOG_USER_ADDED'			=> '<strong>New user created</strong><br />» %s',
	'PASSWORD'					=> 'Пароль',
	'PASSWORD_EXPLAIN'			=> 'Если Вы оставите поле пустым, пароль будет сгенерирован автоматически.',
	'acl_a_add_user'			=> array('lang' => 'Can create new user accounts', 'cat' => 'user_group'),
));

?>
