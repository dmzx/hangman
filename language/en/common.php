<?php
/*
*
* @package Hangman game
* @author dmzx (www.dmzx-web.net)
* @copyright (c) 2015 by dmzx (www.dmzx-web.net)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
   'HANGMAN'   => 'Hangman',
   'HANGMAN_TITLE'   => 'Hangman Game',
   'HANGMAN_TENLIVES'   => 'You have ten lives to play with.',
   'HANGMAN_SCORE'   => 'Score',
   'HANGMAN_LIVES_USED'   => 'Lives Used',
   'HANGMAN_NEW_QUOTE'   => 'New Quote',
   'HANGMAN_RESTART'   => 'Restart',
   'HANGMAN_NEW_QUOTE_START'   => 'Click New Quote to start Hangman Game',
   'HANGMAN_FAILED_TRIES'   => 'Failed Tries',
   'HANGMAN_CORRECT_TRIES'   => 'Correct Tries',
   'HANGMAN_YOUWIN'   => 'You Win!',
   'HANGMAN_QUOTE_ALREADY'   => 'Quote already in play!',
   'HANGMAN_NEW_QUOTE_TO'   => 'Click New Quote to start !',
   'HANGMAN_YOU_LOSE'   => 'You lose - Try again!',
   'HANGMAN_LETTER'   => 'Letter',
   'HANGMAN_ALREADY_USED'   => 'is already used!',
));
