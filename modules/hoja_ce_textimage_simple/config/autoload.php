<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Hoja_ce_textimage_simple
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_hoja_textimage_simple' => 'system/modules/hoja_ce_textimage_simple/templates',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    //FE Classes
    'ContentHoJaTextImageSimple'        => 'system/modules/hoja_ce_textimage_simple/ContentHoJaTextImageSimple.php'
));