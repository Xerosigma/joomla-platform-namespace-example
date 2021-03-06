<?php
/**
 * @package     Joomla.Platform
 * @subpackage  HTTP
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Http;

defined('JPATH_PLATFORM') or die;

use Joomla\Registry\Registry;
use Joomla\Uri\Uri;

/**
 * HTTP transport class interface.
 *
 * @package     Joomla.Platform
 * @subpackage  HTTP
 * @since       11.3
 */
interface Transport
{
	/**
	 * Constructor.
	 *
	 * @param   Registry  $options  Client options object.
	 *
	 * @since   11.3
	 */
	public function __construct(Registry $options);

	/**
	 * Send a request to the server and return a JHttpResponse object with the response.
	 *
	 * @param   string   $method     The HTTP method for sending the request.
	 * @param   Uri      $uri        The URI to the resource to request.
	 * @param   mixed    $data       Either an associative array or a string to be sent with the request.
	 * @param   array    $headers    An array of request headers to send with the request.
	 * @param   integer  $timeout    Read timeout in seconds.
	 * @param   string   $userAgent  The optional user agent string to send with the request.
	 *
	 * @return  Response
	 *
	 * @since   11.3
	 */
	public function request($method, Uri $uri, $data = null, array $headers = null, $timeout = null, $userAgent = null);

	/**
	 * method to check if http transport layer available for using
	 *
	 * @return bool true if available else false
	 *
	 * @since   12.1
	 */
	static public function isSupported();
}
