<?php
/**
*
* @package phpBB Extension - Senky Post Links
* @copyright (c) 2014 Jakub Senko
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_POST_LINKS'	=> 'Post links',

	'PL_ENABLE'			=> 'Post links toestaan',
	'PL_ENABLE_EXPLAIN'	=> 'Als dit is toegestaan, bevat elke post kopieerbare koppelingen van toegestane typen.',
	'PL_LINK_ENABLE'	=> 'Sta link toe',
	'PL_BBCODE_ENABLE'	=> 'Sta BBcode link toe',
	'PL_HTML_ENABLE'	=> 'Sta HTML link toe',
));
