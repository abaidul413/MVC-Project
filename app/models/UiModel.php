<?php 
  /**
  * User Model
  */
  class UiModel extends MainModel{
  	
  	public function __construct()
  	{
  		parent::__construct();
  	}
    
    public function getColor($table)
    {
    	$sql = "select * from $table";
    	return $this->db->select($sql);
    }

    public function updateColor($table, $data, $cond)
    {
    	return $this->db->update($table, $data, $cond);
    }
   
  }

?>