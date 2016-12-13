<?php 
 /**
 * Index Controller
 */
 class Index extends MainController
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 	}

    public function home()
    {
    	$this->load->view('home');
    }

    public function category()
    {
    	$table = "tbl_catergory";
    	$data        = array();
    	$catModel    = $this->load->model('CatModel');
    	$data['cat'] = $catModel->catList($table);
    	$this->load->view("category",$data);
    }

    public function catById()
    {
    	$table = "tbl_catergory";
    	$id    = 1;
    	$data  = array();
    	$catModel = $this->load->model("CatModel");
    	$data['catById'] = $catModel->catById($table, $id);
    	$this->load->view("catById", $data);
    }
 }

?>