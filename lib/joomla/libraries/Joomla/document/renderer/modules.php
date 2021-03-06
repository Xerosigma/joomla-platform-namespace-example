<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Document
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Document\Renderer;

defined('JPATH_PLATFORM') or die;

use Joomla\Document\Renderer;
use JModuleHelper;

/**
 * JDocument Modules renderer
 *
 * @package     Joomla.Platform
 * @subpackage  Document
 * @since       11.1
 */
class Modules extends Renderer
{
	/**
	 * Renders multiple modules script and returns the results as a string
	 *
	 * @param   string  $position  The position of the modules to render
	 * @param   array   $params    Associative array of values
	 * @param   string  $content   Module content
	 *
	 * @return  string  The output of the script
	 *
	 * @since   11.1
	 */
	public function render($position, $params = array(), $content = null)
	{
		$renderer = $this->_doc->loadRenderer('module');
		$buffer = '';

		foreach (JModuleHelper::getModules($position) as $mod)
		{
			$buffer .= $renderer->render($mod, $params, $content);
		}
		return $buffer;
	}
}
