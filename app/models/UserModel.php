<?php 
  /**
  * User Model
  */
  class UserModel extends MainModel{
  	
  	public function __construct()
  	{
  		parent::__construct();
  	}
    
    public function userList($table)
    {
    	$sql = "select * from $table";
    	return $this->db->select($sql);

    	/*
    	$sql    = "select * from tbl_catergory";
    	$query  = $this->db->query($sql);
    	$result = $query->fetchAll();
    	return $result;
        */
    }

    public function userById($table, $id)
    {
        $sql  = "select * from $table where id = :id";
        $data = array('id'=>$id);
        return $this->db->select( $sql, $data);

/*
    	$sql   = "select * from $table where id = :id";
    	$query = $this->db->prepare($sql);
    	$query->bindParam(':id', $id);
    	$query->execute();
    	return $query->fetchAll();
 */

    }

    public function addUser($table, $data)
    {
    	return $this->db->insert($table, $data);
    }

    public function updateUser($table, $data, $cond)
    {
    	return $this->db->update($table, $data, $cond);
    }

    public function delUserById($table, $cond)
    {
    	return $this->db->delete($table, $cond);
    }
   
  }

?>