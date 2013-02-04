<?php
namespace Account;

use \JModelBase as JModelBase;

class Model extends JModelBase
{
	private $data;

	public function __construct()
	{
		$this->data = '<div id="modAccount"><p>Account Module Activated...</p></div>';
	}

	public function getData()
	{
		return $this->data;
	}
}
