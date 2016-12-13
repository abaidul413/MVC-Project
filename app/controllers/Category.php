<?php 
 /**
 * Category Controller
 */
 class Category extends MainController
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 	}

 	public function categoryList()
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

    public function addCategory()
    {
    	$this->load->view('addCategory');
    }

    public function insertCategory()
    {
    	$table    = "tbl_catergory";
        $cat_name = $_POST['cat_name'];
        $title    = $_POST['title'];

    	$data  = array(
    		   'cat_name' => $cat_name,
    		   'title'    => $title
    		);
    	$catModel = $this->load->model("CatModel");
    	$result = $catModel->catInsert($table, $data);
        
        $message = array();
    	if ($result == 1) {
    		$message['msg'] = "Category Added Successfully!!";
    	} else {
    		$message['msg'] = "Failed To Add Category";
    	}
       $this->load->view('addCategory', $message);
    }

    public function updateCategory()
    {
    	$table = "tbl_catergory";
    	$id    = 2;
    	$data  = array();
    	$catModel = $this->load->model("CatModel");
    	$data['updatecatById'] = $catModel->catById($table, $id);
    	$this->load->view("updateCate",$data);
    }

    public function categoryUpdate()
    {
    	$table = "tbl_catergory";
    	$cat_name = $_POST['cat_name'];
    	$title    = $_POST['title'];
    	$id       = $_POST['id'];

    	$cond  = "id=$id";
    	$data  = array(
    		    'cat_name' => $cat_name,
    		    'title'    => $title
    		);
    	$catModel = $this->load->model("CatModel");
    	$result   = $catModel->updateCategory($table, $data, $cond);
    	$message  =array();
    	if ($result == 1) {
    		$message['msg'] = "Category Updated Successfully!!";
    	} else {
    		$message['msg'] = "Failed To Update Category!!";
    	}
       $this->load->view("updateCate",$message);	
    }

    public function deleteCategoryById()
    {
    	$table = "tbl_catergory";
    	$cond = "id=10";
    	$catModel = $this->load->model("CatModel");
    	$catModel->delCategoryById($table, $cond);
    }
 }

?>