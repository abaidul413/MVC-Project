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
    	$data        = array();
    	$catModel    = $this->load->model('CatModel');
    	$data['cat'] = $catModel->catList();
    	$this->load->view('category',$data);
    }
 }

?>