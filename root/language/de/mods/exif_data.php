<?php

/**
*
* @package phpBB3 - gallery
* @version $Id: gallery_acp.php 347 2008-03-03 17:39:58Z nickvergessen $
* @copyright (c) 2007 nickvergessen
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/
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

$lang = array_merge($lang, array(
	'EXIF-DATA'					=> 'EXIF-Daten',
	'EXIF_APERTURE'				=> 'F-Wert',
	'EXIF_CAM_MODEL'			=> 'Kamera-Modell',
	'EXIF_DATE'					=> 'Bild aufgenommen am',
	'EXIF_EXPOSURE'				=> 'Belichtungszeit',
	'EXIF_EXPOSURE_EXP'			=> 'Sek',// 'EXIF_EXPOSURE' unit
	'EXIF_FLASH'				=> 'Blitz',

		'EXIF_FLASH_CASE_0'			=> 'Blitz wurde nicht ausgelöst',
		'EXIF_FLASH_CASE_1'			=> 'Blitz wurde ausgelöst',
		'EXIF_FLASH_CASE_5'			=> 'Kein Messblitz-Licht zurückgeworfen',
		'EXIF_FLASH_CASE_7'			=> 'Messblitz-Licht zurückgeworfen',
		'EXIF_FLASH_CASE_8'			=> 'Ein, Blitz wurde nicht ausgelöst',
		'EXIF_FLASH_CASE_9'			=> 'Blitz wurde ausgelöst, Blitz erzwingen-Modus',
		'EXIF_FLASH_CASE_13'		=> 'Blitz wurde ausgelöst, Blitz erzwingen-Modus, kein Messblitz-Licht zurückgeworfen',
		'EXIF_FLASH_CASE_15'		=> 'Blitz wurde ausgelöst, Blitz erzwingen-Modus, Messblitz-Licht zurückgeworfen',
		'EXIF_FLASH_CASE_16'		=> 'Blitz wurde nicht ausgelöst, Blitz unterdrücken-Modus',
		'EXIF_FLASH_CASE_20'		=> 'Deaktiviert, Blitz wurde nicht ausgelöst, kein Messblitz-Licht zurückgeworfen',
		'EXIF_FLASH_CASE_24'		=> 'Blitz wurde nicht ausgelöst, Automodus',
		'EXIF_FLASH_CASE_25'		=> 'Blitz wurde ausgelöst, Automodus',
		'EXIF_FLASH_CASE_29'		=> 'Blitz wurde ausgelöst, Automodus, kein Messblitz-Licht zurückgeworfen',
		'EXIF_FLASH_CASE_31'		=> 'Blitz wurde ausgelöst, Automodus, Messblitz-Licht zurückgeworfen',
		'EXIF_FLASH_CASE_32'		=> 'Keine Blitzfunktion',
		'EXIF_FLASH_CASE_48'		=> 'Deaktiviert, Keine Blitzfunktion',
		'EXIF_FLASH_CASE_65'		=> 'Blitz wurde ausgelöst, Rote-Augen-Reduzierung',
		'EXIF_FLASH_CASE_69'		=> 'Blitz wurde ausgelöst, Rote-Augen-Reduzierung, kein Messblitz-Licht zurückgeworfen',
		'EXIF_FLASH_CASE_71'		=> 'Blitz wurde ausgelöst, Rote-Augen-Reduzierung, Messblitz-Licht zurückgeworfen',
		'EXIF_FLASH_CASE_73'		=> 'Blitz wurde ausgelöst, Blitz erzwingen-Modus, Rote-Augen-Reduzierung',
		'EXIF_FLASH_CASE_77'		=> 'Blitz wurde ausgelöst, Blitz erzwingen-Modus, Rote-Augen-Reduzierung, kein Messblitz-Licht zurückgeworfen',
		'EXIF_FLASH_CASE_79'		=> 'Blitz wurde ausgelöst, Blitz erzwingen-Modus, Rote-Augen-Reduzierung, Messblitz-Licht zurückgeworfen',
		'EXIF_FLASH_CASE_80'		=> 'Deaktiviert, Rote-Augen-Reduzierung',
		'EXIF_FLASH_CASE_88'		=> 'Blitz wurde nicht ausgelöst, Rote-Augen-Reduzierung',
		'EXIF_FLASH_CASE_89'		=> 'Blitz wurde ausgelöst, Automodus, Rote-Augen-Reduzierung',
		'EXIF_FLASH_CASE_93'		=> 'Blitz wurde ausgelöst, Automodus, kein Messblitz-Licht zurückgeworfen, Rote-Augen-Reduzierung',
		'EXIF_FLASH_CASE_95'		=> 'Blitz wurde ausgelöst, Automodus, Messblitz-Licht zurückgeworfen, Rote-Augen-Reduzierung',

	'EXIF_FOCAL'				=> 'Brennweite',
	'EXIF_FOCAL_EXP'			=> 'mm',// 'EXIF_FOCAL' unit
	'EXIF_ISO'					=> 'ISO-Empfindlichkeit',

	'EXIF_NOT_AVAILABLE'		=> 'nicht verfügbar',

	'EXIF_WHITEB'				=> 'Weißabgleich',
		'EXIF_WHITEB_AUTO'			=> 'Automatisch',
		'EXIF_WHITEB_MANU'			=> 'Manuell',

));
?>