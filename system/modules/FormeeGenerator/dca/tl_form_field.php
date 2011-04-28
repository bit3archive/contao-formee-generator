<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * FormeeGenerator for Contao Open Source CMS
 * Copyright (C) 2011 Tristan Lins
 *
 * Extension for:
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 * 
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  InfinitySoft 2011
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    FormeeGenerator
 * @license    LGPL
 * @filesource
 */


/**
 * Table tl_form_field
 */
foreach (array_keys($GLOBALS['TL_DCA']['tl_form_field']['palettes']) as $k)
{
	if ($k != '__selector__')
	{
		$strFormee = ';{formee_legend},formee_width,formee_clear' . ($k == 'submit' ? ',formee_align' : '');
		$intPos = strpos($GLOBALS['TL_DCA']['tl_form_field']['palettes'][$k], ';{submit_legend');
		if ($intPos !== false)
		{
			$GLOBALS['TL_DCA']['tl_form_field']['palettes'][$k] = 
				substr($GLOBALS['TL_DCA']['tl_form_field']['palettes'][$k], 0, $intPos) .
				$strFormee .
				substr($GLOBALS['TL_DCA']['tl_form_field']['palettes'][$k], $intPos);
		}
		else
		{
			$GLOBALS['TL_DCA']['tl_form_field']['palettes'][$k] .= $strFormee;
		}
	}
}
$GLOBALS['TL_DCA']['tl_form_field']['fields']['formee_width'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['formee_width'],
	'default'                 => 12,
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12),
	'reference'               => &$GLOBALS['TL_LANG']['tl_form_field'],
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['formee_clear'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['formee_clear'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12')
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['formee_align'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['formee_align'],
	'default'                 => 'left',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('left', 'right'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_form_field'],
	'eval'                    => array('tl_class'=>'w50')
);

?>