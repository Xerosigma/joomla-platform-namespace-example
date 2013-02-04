<?php
namespace Account;

use \SplPriorityQueue as SplPriorityQueue;

use Account\Model as Model;
use Account\View as View;

class Controller
{
	// Fields
	const PRIORITY = 1;
	
	private $primaryModel;
	private $primaryView;
	
	// Application Constructor
	function __construct()
	{
		$this->primaryModel = new Model();
	}
	
	function run()
	{
		$layoutDirectory = "" . __DIR__ . '/views/tmpl/default';
		
		if(file_exists($layoutDirectory))
		{
			try
			{
				$paths = new SplPriorityQueue();
				$paths->insert($layoutDirectory, $this::PRIORITY);

				$view = new View($this->primaryModel, $paths);
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
	
	function getView()
	{
		$view = $this->primaryModel->getData();
		return $view;
	}
}