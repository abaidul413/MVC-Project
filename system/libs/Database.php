<?php 
/**
* Dabase Class
*/
class Database extends PDO{
	
	public function __construct($dsn, $user, $pass)
	{
		parent::__construct($dsn, $user, $pass);
	}

	public function select($sql, $data = array(), $fetchstyle = PDO::FETCH_ASSOC)
	{
		$stmt = $this->prepare($sql);
		foreach ($data as $key => $value) {
			$stmt->bindParam($key, $value);
		}
		$stmt->execute();
		return $stmt->fetchAll($fetchstyle);
		
/*
		$sql = "select * from $table";
		$query = $this->prepare($sql);
		$query->execute();
		return $query->fetchAll();
*/
	} 
}

?>