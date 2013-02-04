<?php
namespace Modules\Table;

/**
 * J! Platform Namespace Example Module Entry Point
 * 
 * @author Nestor E. Ledon
 * 
 * @pacakge  Joomla.Platform.Namespace.Example
 * 
 * @since   0.1
 * 
 * @link http://www.terrachaos.net TerraChaos Development Network
 * 
 * @copyright  Copyright (C) 2011 - 2013 TerraChaosStudios. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 * 
 */

// Bootstrap J! Platform
$root = dirname(__FILE__) . '/../../../..';
require_once($root . '/lib/joomla/libraries/import.php');

// Setup autoloader & import core namespaces.
\JLoader::setup(\JLoader::NATURAL_CASE, true);
\JLoader::registerNamespace('Table', dirname(__FILE__) . '/table');

// Instantiate the main controller.
$controller = new \Table\Controller();

if (!defined('JPATH_SITE'))
{
	define('JPATH_SITE', dirname(__FILE__));
}

//$controller->run();

class Module
{
	public function __construct()
	{
		;
	}
	
	public function run()
	{
		$controller = new \Table\Controller();
		$controller->run();
	}
}