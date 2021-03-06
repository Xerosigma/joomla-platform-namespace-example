<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Model
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Model;

defined('JPATH_PLATFORM') or die;

use Joomla\Registry\Registry;

/**
 * Joomla Platform Model Interface
 *
 * @package     Joomla.Platform
 * @subpackage  Model
 * @since       12.1
 */
interface Model
{
	/**
	 * Get the model state.
	 *
	 * @return  Registry  The state object.
	 *
	 * @since   12.1
	 */
	public function getState();

	/**
	 * Set the model state.
	 *
	 * @param   Registry  $state  The state object.
	 *
	 * @return  void
	 *
	 * @since   12.1
	 */
	public function setState(Registry $state);
}
