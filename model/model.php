<?php 
declare(strict_types = 1);

namespace Model;

use PDO;
use System\Connection;
use Libraries\Queries;

class Model extends Queries {
		
	private function connect()
	{
		return new Connection();
	}
	/**
	 * runQuery - provides a flexible way to run executeQuery()
	 *
	 * @return array
	 */
	public function runQuery(string $query, array|int $mixed = NULL, int $fetchMode = PDO::FETCH_OBJ)
	{
		if($mixed == NULL) {

			return $this->executeQuery($query, NULL, $fetchMode);

		} elseif (gettype($mixed) == 'array') {

			return $this->executeQuery($query, $mixed, $fetchMode);

		} elseif (gettype($mixed) == 'integer') {

			return $this->executeQuery($query, NULL, $mixed);
		}
	}
	
	/**
	 * executeQuery
	 *
	 * @return Array
	 */
	public function executeQuery(string $query, ?array $data, int $fetchMode):Array
	{
		$sql = $this->connect()
		            ->server()
					->prepare($query);

		if (!empty($data)) {

			$sql->execute($data);
			return $sql->fetchAll($fetchMode);
		
		} else {

		    $sql->execute();
		    return $sql->fetchAll($fetchMode);
		}
	}

	/**
	 * execute queries - it's purpose is to insert data into database without return anything
	 *
	 * @return void
	 */
	public function execute(string $query, array $data = NULL)
	{
		$sql = $this->connect()
		            ->server()
					->prepare($query);

		if (!empty($data)) {

			if ($sql->execute($data) == true) {

				return true;	

			} else {

				return false;
			}
			
		
		} else {

			if ($sql->execute() == true) {

				return true;	

			} else {

				return false;
			}
		}
	}
}