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
	'PL_LINK'				=> 'Link',
	'PL_BBCODE'				=> 'BBcode',
	'PL_HTML'				=> 'HTML',

	'PL_HIDE'				=> 'Verberg post links',
	'PL_SHOW'				=> 'Toon post links',

	'CLICK_TO_COPY_LINK'	=> 'Klik om de link van het bericht in gewoon formaat te kopiëren',
	'CLICK_TO_COPY_BBCODE'	=> 'Klik om de link van het bericht in BBcode formaat te kopiëren',
	'CLICK_TO_COPY_HTML'	=> 'Klik om de link van het bericht in HTML formaat te kopiëren',
));
