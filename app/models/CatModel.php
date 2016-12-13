<?php 
  /**
  * Category model
  */
  class CatModel extends MainModel{
  	
  	public function __construct()
  	{
  		parent::__construct();
  	}
    
    public function catList($table)
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

    public function catById($table, $id)
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

    public function catInsert($table, $data)
    {
    	return $this->db->insert($table, $data);
    }

    public function updateCategory($table, $data, $cond)
    {
    	return $this->db->update($table, $data, $cond);
    }
   
  }

?>