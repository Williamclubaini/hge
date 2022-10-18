<?php 
declare(strict_types = 1);

namespace System;
use PDO;

class Connection extends Controller {

    
	private $driver    = CONFIG['driver'];
	private $host      = CONFIG['host'];
	private $database  = CONFIG['database'];
	private $charset   = CONFIG['charset'];
	private $username  = CONFIG['username'];
    private $password  = CONFIG['password'];
	private $dsn;
    
	
	private function SERVER_ERROR($msg)
	{
		$ERROR = 1;
		require 'views/error/error_2.php';
		exit();
	}

	/**
	 * 
	 * server_connection - connection object
	 * @return object
	 * 
	 **/
	public function server()
	{
		if($this->driver === NULL || $this->driver === '') {

			$msg = 'missing driver';
			$this->SERVER_ERROR($msg);
			
		} elseif($this->host === NULL || $this->host === '') {

			$msg = 'missing hostname';
			$this->SERVER_ERROR($msg);

		} elseif($this->database === NULL || $this->database === '') {

			$msg = 'database name not provided';
			$this->SERVER_ERROR($msg);
			
		} elseif($this->username === NULL || $this->username === '') {

			$msg = 'username not provided';
			$this->SERVER_ERROR($msg);
			
		} else {
			
		    $this->dsn  =  $this->driver.':host='.$this->host.
					       ';dbname='.$this->database.';charset='.$this->charset;
		}
		
		return $this->connection($this->dsn, $this->username, $this->password);
	}
	
	/**
	 * connection
	 * @return object 
	 * 
	 */
	public function connection(string $dsn, string $username, string $password)
	{
		try {

			$object = new PDO($dsn, $username, $password);
			$object->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return  $object;

		} catch(PDOException $e) {

			echo $e->getMessage();
		}
	}

}