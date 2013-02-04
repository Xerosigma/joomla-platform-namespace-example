<?php
/**
 * J! Platform Namespace Example Application Entry Point
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
$projectRoot = __DIR__ . '/../..';
require_once($projectRoot . '/lib/joomla/libraries/import.php');

if (!defined('JPATH_SITE'))
{
	define('JPATH_SITE', __DIR__);
}

// Setup autoloader & import core namespaces.
JLoader::setup(JLoader::NATURAL_CASE, true);
JLoader::registerNamespace('Controllers', __DIR__ . '/controllers');
JLoader::registerNamespace('Models', __DIR__ . '/models');
JLoader::registerNamespace('Views', __DIR__ . '/views');
JLoader::registerNamespace('Modules', __DIR__ . '/modules');

// Instantiate the main controller.
$controller = new Controllers\Application\ApplicationController();

// Collect all modules from directory.
$m = array();
if($handle = opendir(__DIR__ . '/modules/'))
{
	while(false !== ($entry = readdir($handle)))
	{
		if($entry != '.' && $entry != '..' && $entry != 'index.html')
		{
			// Capitalize first letter in directory name and make it key.
			$m[ucfirst($entry)] = $entry;
		}
	}
	closedir($handle);
}

// Array of views from modules
$moduleArray = array();

// Instantiate each module
foreach($m as $key => $value)
{
	$class = 'Modules\\' . $key . '\Module';
	$object = new $class();
	$moduleArray[$key] = $object;
}

// Run Applications
$controller->run($moduleArray);