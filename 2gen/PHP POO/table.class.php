<?php

class table
{
	protected $id = null;
	protected $table = null;


	function __constructor()
	{
	}

	function bind($data)
	{
		foreach($data as $key=>$value)
		{
			$this->$key = $value;
		}
	}

	function load($id)
	{
		$this->id = $id;
		$dbo = $database::getInstance();
		$sql = $this->buildQuery('load');

		$dboQuery($sql);
		$row = $dbo->loadObjectList();
		foreach($row as $key=>$value)
		{
			if($key == "id")
			{
				continue;
			}
			$this->$key = $value;
		}
	}

	function store()
	{
		$dbo = database::getInstance();
		$sql = $this->buildQuery('store');
		$dbo->dboQuery($sql);
	}

	protected function buildQuery($task)
	{
		
	}


}


?>