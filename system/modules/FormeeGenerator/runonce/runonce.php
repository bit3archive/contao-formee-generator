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
 * Class FormeeGeneratorRunonce
 * 
 * 
 * @copyright  InfinitySoft 2011
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    Layout Additional Sources
 */
class FormeeGeneratorRunonce
{
	public function run()
	{
		$arrTemplates = scandir(TL_ROOT . '/system/modules/FormeeGenerator/templates');
		foreach ($arrTemplates as $strTemplate)
		{
			if (preg_match('#\w\.tpl$#', $strTemplate))
			{
				if (!file_exists(TL_ROOT . '/templates/' . $strTemplate))
				{
					copy(TL_ROOT . '/system/modules/FormeeGenerator/templates/' . $strTemplate, TL_ROOT . '/templates/' . $strTemplate);
					$_SESSION[TL_INFO][] = 'Copy FormeeGenerator template "' . $strTemplate . '" into templates dir.';
				}
				else
				{
					$_SESSION[TL_INFO][] = 'You updated FormeeGenerator, please have a look if your template "' . $strTemplate . '" is up to date.';
				}
			}
		}
	}
}

/**
 * Instantiate controller
 */
$objRunonce = new FormeeGeneratorRunonce();
$objRunonce->run();

?>