<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2015 - 2015 Agentur medienworx
 *
 * @package     mwk-fire-modal-window
 * @author      Christian Kienzl <christian.kienzl@medienworx.eu>
 * @author      Peter Ongyert <peter.ongyert@medienworx.eu>
 * @link        http://www.medienworx.eu
 * @license     http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_DCA']['tl_module']['palettes']['mwk_back_to_top'] = '

	{title_legend},
        name,
        type;

	{button_configuration},
		mwk_back_to_top_bgcolor,
		mwk_back_to_top_size,
		mwk_back_to_top_radius,
		mwk_back_to_top_right,
		mwk_back_to_top_bottom;


	{jquery_configuration},
		mwk_back_to_top_offset,
		mwk_back_to_top_offset_opacity,
		mwk_back_to_top_scroll_duration;

	{protected_legend:hide},
        protected;

    {expert_legend:hide},
        guests,
        cssID,
        space
';

$GLOBALS['TL_DCA']['tl_module']['fields']['mwk_back_to_top_bgcolor'] =
	array
	(
		'label' => &$GLOBALS['TL_LANG']['tl_module']['mwk_back_to_top_bgcolor'],
		'inputType' => 'text',
		'eval' => array
		(
			'maxlength'=>6,
			'multiple'=>true,
			'size'=>2,
			'colorpicker'=>true,
			'isHexColor'=>true,
			'decodeEntities'=>true,
			'tl_class'=>'w50 wizard'
		),
		'sql' => "varchar(64) NOT NULL default ''"
	);

$GLOBALS['TL_DCA']['tl_module']['fields']['mwk_back_to_top_size'] =
	array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_module']['mwk_back_to_top_size'],
		'exclude'                 => true,
		'inputType'               => 'select',
		'options'                 => array
		(
			'-btn-size-40',
			'-btn-size-50',
			'-btn-size-60',
			'-btn-size-70',
			'-btn-size-80',
			'-btn-size-90',
			'-btn-size-100',
			'-btn-size-custom'
		),
		'eval'                    => array('tl_class'=>'w50 clr'),
		'sql'                     => "varchar(32) NOT NULL default '-btn-size-40'"
	);
$GLOBALS['TL_DCA']['tl_module']['fields']['mwk_back_to_top_right'] =
	array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_module']['mwk_back_to_top_right'],
		'exclude'                 => true,
		'inputType'               => 'select',
		'options'                 => array
		(
			'-btn-right-10',
			'-btn-right-20',
			'-btn-right-30',
			'-btn-right-40',
			'-btn-right-50',
			'-btn-right-60',
			'-btn-right-70',
			'-btn-right-80',
			'-btn-right-90',
			'-btn-right-100',
			'-btn-right-custom'
		),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default '-btn-right-10'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['mwk_back_to_top_bottom'] =
	array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_module']['mwk_back_to_top_bottom'],
		'exclude'                 => true,
		'inputType'               => 'select',
		'options'                 => array
		(
			'-btn-bottom-10',
			'-btn-bottom-20',
			'-btn-bottom-30',
			'-btn-bottom-40',
			'-btn-bottom-50',
			'-btn-bottom-60',
			'-btn-bottom-70',
			'-btn-bottom-80',
			'-btn-bottom-90',
			'-btn-bottom-100',
			'-btn-bottom-custom'
		),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default '-btn-bottom-40'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['mwk_back_to_top_radius'] =
	array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_module']['mwk_back_to_top_radius'],
		'exclude'                 => true,
		'inputType'               => 'select',
		'options'                 => array
		(
			'-btn-radius-10',
			'-btn-radius-20',
			'-btn-radius-30',
			'-btn-radius-40',
			'-btn-radius-50',
			'-btn-radius-60',
			'-btn-radius-70',
			'-btn-radius-80',
			'-btn-radius-90',
			'-btn-radius-100',
			'-btn-bottom-custom'
		),
	'eval'                    => array('includeBlankOption'=>true,'tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['mwk_back_to_top_offset'] =
	array
	(
		'label'                 => &$GLOBALS['TL_LANG']['tl_module']['mwk_back_to_top_offset'],
		'inputType'             => 'text',
		'eval'                  => array('tl_class'=>'w50'),
		'sql'                   => "varchar(255) NOT NULL default '300'"
	);

$GLOBALS['TL_DCA']['tl_module']['fields']['mwk_back_to_top_offset_opacity'] =
	array
	(
		'label'                 => &$GLOBALS['TL_LANG']['tl_module']['mwk_back_to_top_offset_opacity'],
		'inputType'             => 'text',
		'eval'                  => array('tl_class'=>'w50'),
		'sql'                   => "varchar(255) NOT NULL default '1200'"
	);

$GLOBALS['TL_DCA']['tl_module']['fields']['mwk_back_to_top_scroll_duration'] =
	array
	(
		'label'                 => &$GLOBALS['TL_LANG']['tl_module']['mwk_back_to_top_scroll_duration'],
		'inputType'             => 'text',
		'eval'                  => array('tl_class'=>'w50'),
		'sql'                   => "varchar(255) NOT NULL default '700'"
	);
