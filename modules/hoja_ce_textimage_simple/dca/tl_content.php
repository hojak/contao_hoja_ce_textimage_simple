<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   hj_ce_text_images
 * @author    Holger Janßen
 * @license   LGPL
 * @copyright 2014, Holger Janßen
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['hoja_textimage_simple'] 
	= '{type_legend},type,headline;{hoja_text_images_legend},multiSRC,hoja_ti_position,hoja_ti_width;'
	. '{text_legend},text;{protected_legend:hide},protected;{expert_legend:hide},guests,invisible,cssID,space';


$GLOBALS['TL_DCA']['tl_content']['fields']['hoja_ti_position'] = array (
	'label'      => &$GLOBALS['TL_LANG']['tl_content']['hoja_ti_position'],
	'inputType'  => 'select',
	'options'    => array 
	(
		'left'       => &$GLOBALS['TL_LANG']['tl_content']['hoja_ti_position_left'], 
		'right'      => &$GLOBALS['TL_LANG']['tl_content']['hoja_ti_position_right'],
	),
	'exclude'    => true,
	//'search'   => true,
	'eval'       => array('mandatory'=>true, 'maxlength'=>5, 'tl_class' => 'w50 clr'),
	'sql'        => "varchar(10) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['hoja_ti_width'] = array 
(
	'label'      => &$GLOBALS['TL_LANG']['tl_content']['hoja_ti_width'],
	'inputType'  => 'select',
	'options'    => array 
	(
		'small'        => &$GLOBALS['TL_LANG']['tl_content']['hoja_ti_width_small'], 
		'medium'       => &$GLOBALS['TL_LANG']['tl_content']['hoja_ti_width_medium'], 
		'large'        => &$GLOBALS['TL_LANG']['tl_content']['hoja_ti_width_large'] 
	),
	'exclude'    => true,
	//'search'   => true,
	'eval'       => array('mandatory'=>true, 'maxlength'=>6, 'tl_class' => 'w50'),
	'sql'        => "varchar(10) NOT NULL default ''"
);






