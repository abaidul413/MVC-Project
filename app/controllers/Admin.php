<?php 
/**
* Admin Class
*/
class Admin extends MainController
{
	
	public function __construct()
	{
	  Session::checkSession();
	  parent::__construct();
	}

	public function Index()
	{
		$this->admin();
	}

   public function admin()
   {
	$this->load->view("Admin/header");
	$this->load->view("Admin/sidebar");
	$this->load->view("Admin/admin");
	$this->load->view("Admin/footer");
   }

    public function addCategory()
    {
    	$this->load->view("Admin/header");
	    $this->load->view("Admin/sidebar");
    	$this->load->view('Admin/addCategory');
    	$this->load->view("Admin/footer");
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
    	$url = BASE_URL."/Admin/categoryList?msg=".urlencode(serialize($message));
       header("Location:$url");
    }

    public function categoryList()
    {
		$this->load->view("Admin/header");
	    $this->load->view("Admin/sidebar");
		$table = "tbl_catergory";
		$data        = array();
		$catModel    = $this->load->model('CatModel');
		$data['cat'] = $catModel->catList($table);
		$this->load->view("Admin/categoryList",$data);
		$this->load->view("Admin/footer");
    }

}


?>