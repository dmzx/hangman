<?php
/**
*
* Reputation System
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2014 Lukasz Kaczynski
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

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
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'RS_TITLE'			=> 'Système de réputation',

	'RS_ACTION'					=> 'Action',
	'RS_DATE'					=> 'Date',
	'RS_DETAILS'				=> 'Détails de la réputation de l’utilisateur',
	'RS_FROM'					=> 'De',
	'RS_LIST'					=> 'Liste des points de réputation de l’utilisateur',
	'RS_POST_COUNT'				=> 'Points pour le message',
	'RS_POST_REPUTATION'		=> 'Message de réputation',
	'RS_USER_COUNT'				=> 'Points de l’utilisateur',
	'RS_POSITIVE_COUNT'			=> 'Positif',
	'RS_NEGATIVE_COUNT'			=> 'Negatif',
	'RS_STATS'					=> 'Statistiques',
	'RS_WEEK'					=> 'La semaine dernière',
	'RS_MONTH'					=> 'Le mois dernier',
	'RS_6MONTHS'				=> 'Les 6 derniers mois',
	'RS_POINT'					=> 'Point',
	'RS_POINTS_TITLE'			=> array(
		1	=> 'Point : %d',
		2	=> 'Points : %d',
	),
	'RS_POST_DELETE'			=> 'Message supprimé',
	'RS_POWER'					=> 'Pouvoir de réputation',
	'RS_TIME'					=> 'Heure',
	'RS_TO'						=> 'à',
	'RS_TO_USER'				=> 'A',
	'RS_VOTING_POWER'			=> 'Points du pouvoir restants',

	'RS_EMPTY_DATA'				=> 'There are no reputation points.',
	'RS_NA'						=> 'n/a',
	'RS_NO_ID'					=> 'No ID',
	'RS_NO_REPUTATION'			=> 'There is no such reputation.',

	'NO_REPUTATION_SELECTED'	=> 'You did not select reputation point.',

	'RS_REPUTATION_DELETE_CONFIRM'	=> 'Do you really want to delete this reputation?',
	'RS_REPUTATIONS_DELETE_CONFIRM'	=> 'Do you really want to delete these reputation?',
	'RS_POINTS_DELETED'			=> array(
		1	=> 'The reputation has been deleted.',
		2	=> 'The reputations have been deleted.',
	),

	'RS_CLEAR_POST'				=> 'Clear post reputation',
	'RS_CLEAR_POST_CONFIRM'		=> 'Do you really want to delete all reputation points for that post?',
	'RS_CLEARED_POST'			=> 'The post reputation has been cleared.',
	'RS_CLEAR_USER'				=> 'Clear user reputation',
	'RS_CLEAR_USER_CONFIRM'		=> 'Do you really want to delete all reputation points for that user?',
	'RS_CLEARED_USER'			=> 'The user reputation has been cleared.',

	'RS_LATEST_REPUTATIONS'			=> 'Latest reputations',
	'LIST_REPUTATIONS'				=> array(
		1	=> '%d reputation',
		2	=> '%d reputations',
	),
	'ALL_REPUTATIONS'				=> 'All reputations',

	'RS_NEW_REPUTATIONS'			=> 'New reputation points',
	'RS_NEW_REP'					=> 'You received <strong>1 new</strong> reputation comment',
	'RS_NEW_REPS'					=> 'You received <strong>%s new</strong> reputation comments',
	'RS_CLICK_TO_VIEW'				=> 'Go to received points',

	'RS_MORE_DETAILS'				=> '» more details',

	'RS_USER_REPUTATION'			=> '%s\'s reputation',

	'RS_VOTE_POWER_LEFT'			=> '%1$d of %2$d',

	'RS_POWER_DETAILS'				=> 'How reputation power should be calculated',
	'RS_POWER_DETAIL_AGE'			=> 'By registration date',
	'RS_POWER_DETAIL_POSTS'			=> 'By number of posts',
	'RS_POWER_DETAIL_REPUTAION'		=> 'By reputation',
	'RS_POWER_DETAIL_WARNINGS'		=> 'By warnings',
	'RS_POWER_DETAIL_MIN'			=> 'Minimum reputation power for all users',
	'RS_POWER_DETAIL_MAX'			=> 'Reputation power capped at maximum allowed',
	'RS_POWER_DETAIL_GROUP_POWER'	=> 'Reputation power based on user group',
	'RS_GROUP_POWER'				=> 'Reputation power based on user group',
));
