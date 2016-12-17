<?php 
/**
* Login Class
*/
class LoginModel extends MainModel
{
	
	public function __construct()
	{
		parent::__construct();
	}

  public function userControl($table, $username, $password)
  {
  	$sql = "SELECT * FROM $table WHERE username =? AND password =? ";
  	return $this->db->affectedRows($sql, $username, $password);
  }

  public function getUserData($table, $username, $password)
  {
  	$sql = "SELECT * FROM $table WHERE username =? AND password=?";
  	return $this->db->selectUser($sql, $username, $password);
  }
}

?>