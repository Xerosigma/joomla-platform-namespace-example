<?php
namespace Table;

use \JModelBase as JModelBase;

class Model extends JModelBase
{
	private $data;

	public function __construct()
	{
		$this->data = '<div id="modTable"><p>Table Module Activated...</p></div>';
	}

	public function getData()
	{
		return $this->data;
	}
}
