<?php
/**
* PostMode Class
*/
class PostModel extends MainModel
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllPost($table)
	{
		$sql = "select * from $table order by id desc limit 3";
		return $this->db->select($sql);
	}

	public function getPostById($tablePost, $tableCat, $id)
	{
		$sql = "SELECT $tablePost.*, $tableCat.cat_name FROM $tablePost INNER JOIN $tableCat ON $tablePost.category = $tableCat.id WHERE $tablePost.id = $id";
		return $this->db->select($sql);
	}

	public function postByCat($tablePost, $tableCat, $id)
	{
		$sql = "SELECT $tablePost.*, $tableCat.cat_name FROM $tablePost INNER JOIN $tableCat ON $tablePost.category = $tableCat.id WHERE $tableCat.id = $id";
		return $this->db->select($sql);
	}

	public function getLeatestPost( $table)
	{
		$sql = "select * from $table order by id desc limit 5";
		return $this->db->select($sql);
	}

	public function postBySearch($tablePost, $keyword, $category)
	{
		if(isset($keyword) && !empty($keyword))
		 {
		$sql = "SELECT * FROM $tablePost WHERE post_title LIKE '%$keyword%' OR post_content LIKE '%$keyword%' ";
	    }elseif (isset($category)) {
	    	$sql = "SELECT * FROM $tablePost WHERE category = $category";
	    }
		return $this->db->select($sql);
	}
}

?>