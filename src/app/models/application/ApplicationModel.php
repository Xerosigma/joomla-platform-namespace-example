<?php
namespace Models\Application;

defined('JPATH_PLATFORM') or die;

use \JModelBase as JModelBase;

/**
 * Application Model
 * 
 * @author Nestor E. Ledon
 * 
 * @pacakge  Joomla.Platform.Namespace.Example
 * 
 * @since   0.1
 */
class ApplicationModel extends JModelBase
{
	private $modules;

	private $title = "J! Platform Namespace Example";

	/**
	 * Takes array of modules
	 * @param type $mods
	 */
	public function __construct($mods)
	{
		$this->modules = $mods;
	}

	public function getView($moduleName)
	{
		return $this->modules[$moduleName]->run();
	}
	
	public function getTitle()
	{
		return $this->title;
	}
}
