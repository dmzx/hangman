<?php
/*
*
* @package Hangman game
* @author dmzx (www.dmzx-web.net)
* @copyright (c) 2015 by dmzx (www.dmzx-web.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translated into French by Galixte (http://www.galixte.com)
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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
   'HANGMAN'   => 'Le pendu',
   'HANGMAN_TITLE'   => 'Jeu du pendu',
   'HANGMAN_TENLIVES'   => 'Vous avez dix vies pour jouer.',
   'HANGMAN_SCORE'   => 'Score',
   'HANGMAN_LIVES_USED'   => 'Vies utilisées',
   'HANGMAN_NEW_QUOTE'   => 'Nouvelle citation',
   'HANGMAN_RESTART'   => 'Recommencer',
   'HANGMAN_NEW_QUOTE_START'   => 'Cliquer sur Nouvelle citation pour démarrer le jeu du pendu',
   'HANGMAN_FAILED_TRIES'   => 'Essais échoués',
   'HANGMAN_CORRECT_TRIES'   => 'Essais corrects',
));
