<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Image
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Image\Filter;

defined('JPATH_PLATFORM') or die;

use Joomla\Image\Filter;

/**
 * Image Filter class to make an image appear "sketchy".
 *
 * @package     Joomla.Platform
 * @subpackage  Image
 * @since       11.3
 */
class Sketchy extends Filter
{
	/**
	 * Method to apply a filter to an image resource.
	 *
	 * @param   array  $options  An array of options for the filter.
	 *
	 * @return  void
	 *
	 * @since   11.3
	 */
	public function execute(array $options = array())
	{
		// Perform the sketchy filter.
		imagefilter($this->handle, IMG_FILTER_MEAN_REMOVAL);
	}
}
