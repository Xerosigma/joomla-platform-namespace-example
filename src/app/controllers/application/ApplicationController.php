<?php
namespace Controllers\Application;

defined('JPATH_PLATFORM') or die;

use JControllerBase as ControllerBase;
use Models\Application\ApplicationModel as ApplicationModel;
use Views\Application\ApplicationView as ApplicationView;

use \SplPriorityQueue as SplPriorityQueue;

/**
 * Application Controller
 * 
 * @author Nestor E. Ledon
 * 
 * @pacakge  Joomla.Platform.Namespace.Example
 * 
 * @since   0.1
 */
class ApplicationController extends ControllerBase
{
	const PRIORITY = 1;
	
	public function __construct(){}

	public function execute(){}

	/**
	 * Takes module array.
	 */
	public function run($modules)
	{	
		$model = new ApplicationModel($modules);
		
		$layoutDirectory = "" . __DIR__ . '/../../views/default/tmpl';
		
		if(file_exists($layoutDirectory))
		{
			try
			{
				$paths = new SplPriorityQueue();
				$paths->insert($layoutDirectory, $this::PRIORITY);

				$view = new ApplicationView($model, $paths);
				$view->setLayout('default');

				printf($view->render());
			}
			catch(RuntimeException $e)
			{
				printf("RuntimeException: " , $e);
			}
		}
		else
		{
			printf('Layout directory cannot be found!');
		}
	}
}