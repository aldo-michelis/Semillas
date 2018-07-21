<?php

class database
{
	private $host;
	private $user;
	private $pass;
	private $dbName;

	private static $instance;

	private $connection;
	Private $result;
	Private $numRows;

	private function __consturct()
	{

	}

	static function getInstance()
	{
		if(!self::$instance)
		{
			self::$instance = new self();
		}
	}

	function connect($host, $user$, $pass, $dbName)
	{
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbName = $dbName;

		$this->connection = mysqli_connect($this->host, $this->user, $this->pass, $this->dbName);

	}

	public function doQuery($sql);
	{
		$this->results = mysqli_query($this->connection, $sql);
		$this->numRows = $this->results->num_rows;
	}

	public function loadObjectList()
	{
		$obj = "No Results";
		if($this->results)
		{
			$obj = mysqli_fetch_assoc($this->results);
		}
		return $obj;
	}
}


?>