<?php
/**
 * @package     Joomla.Platform
 * @subpackage  GitHub
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Github;

defined('JPATH_PLATFORM') or die;

use Joomla\Http\Http as HttpHttp;
use Joomla\Http\Transport;
use Joomla\Registry\Registry;

/**
 * HTTP client class for connecting to a GitHub instance.
 *
 * @package     Joomla.Platform
 * @subpackage  GitHub
 * @since       11.3
 */
class Http extends HttpHttp
{
	/**
	 * @const  integer  Use no authentication for HTTP connections.
	 * @since  11.3
	 */
	const AUTHENTICATION_NONE = 0;

	/**
	 * @const  integer  Use basic authentication for HTTP connections.
	 * @since  11.3
	 */
	const AUTHENTICATION_BASIC = 1;

	/**
	 * @const  integer  Use OAuth authentication for HTTP connections.
	 * @since  11.3
	 */
	const AUTHENTICATION_OAUTH = 2;

	/**
	 * Constructor.
	 *
	 * @param   Registry   $options    Client options object.
	 * @param   Transport  $transport  The HTTP transport object.
	 *
	 * @since   11.3
	 */
	public function __construct(Registry $options = null, Transport $transport = null)
	{
		// Call the JHttp constructor to setup the object.
		parent::__construct($options, $transport);

		// Make sure the user agent string is defined.
		$this->options->def('userAgent', 'JGitHub/2.0');

		// Set the default timeout to 120 seconds.
		$this->options->def('timeout', 120);
	}
}
