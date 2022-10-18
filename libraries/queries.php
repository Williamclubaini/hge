<?php
declare(strict_types = 1);

namespace Libraries;

Class Queries { 
	
	private $columnValues = [];

	public function select(string $table)
	{
		$query = 'SELECT * FROM `'.$table.'`';
		return $query;
	}
	
	public function select2(string $table, string $column)
	{
		$query = 'SELECT * FROM `'.$table.'` WHERE '.$column.' = ?';
		return $query;
	}

	public function selectlimit(string $table, string $column, $limit, $offset)
	{
		$query = 'SELECT * FROM `'.$table.'` WHERE '.$column.' = ? LIMIT '.$limit.' OFFSET '.$offset;
		return $query;
	}

	public function select3(string $table, string $column1, string $column2)
	{
		$query = 'SELECT * FROM `'.$table.'` WHERE '.$column1.' = ? AND '.$column2.' = ?';
		return $query;
	}

	public function limit(string $table, int $int)
	{
		$query = 'SELECT * FROM `'.$table.'` LIMIT '.$int;
		return $query;
	}

	public function limit_Offset(string $table, int $limit, int $offset)
	{
		$query = 'SELECT * FROM `'.$table.'` LIMIT '.$limit.' OFFSET '.$offset;
		return $query;
	}

	public function deleteAll(string $table)
	{
		$query = 'TRUNCATE '.CONFIG['database'].'.'.$table;
		return $query;
	}

	public function delete2(string $table, string $column)
	{
		$query = 'DELETE FROM `'.$table.'` WHERE '.$column.' = ?';
		return $query;
	}

	public function insert(string $table, array $columns)
	{
		$colum_number = count($columns);
		$values = array_fill(intval(0), $colum_number, "?");
		$query  = 'INSERT INTO `'.$table.'`('.implode(', ', $columns).') 
		           VALUES('.implode(', ', $values).')';
		return $query;
	}

	public function update(string $table, array $columns, string $column)
	{
		foreach ($columns as $cols) {
                    array_push($this->columnValues, $cols.' = ?');
                }        
        $query = 'UPDATE `'.$table.'` SET '.implode(', ', $this->columnValues).' 
                  WHERE '.$column.' = ?';
        return $query;
	}

	public function countAll(string $table):string
	{
		$query = 'SELECT Count(*) AS num FROM `'.$table.'`';
		return $query;
	}

	public function find($value)
	{
		$query = "SELECT * FROM `products` WHERE `pname` LIKE '{$value}%'";
		return $query;
	}

	public function count2(string $table, string $column):string
	{
		$query = 'SELECT Count(*) AS numberOfRecords FROM `'.$table.'` WHERE '.$column.' = ?';
		return $query;
	}

	public function count3(string $table, string $column1, string $column2)
	{
		$query = 'SELECT Count(*) AS numberOfRecords FROM `'.$table.'` WHERE '.$column1.' = ? AND '.$column2.' = ?';
		return $query;
	}
		
	public function columnSummation(string $column, string $table):string
	{
		$query = 'SELECT SUM('.$column.') AS columnSum FROM `'.$table.'`';
		return $query;
	}
}
?>