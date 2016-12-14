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
    	$this->load->view('header');
        
        $data = array();
        $table = "tbl_post";
        $postModel = $this->load->model("PostModel");
        $data['allPost'] = $postModel->getAllPost($table);
    	$this->load->view('content', $data);

    	$this->load->view('saidbar');
    	$this->load->view('footer');
    }

    public function postDetails($id)
    {
       $this->load->view('header');

       $data = array();
       $tablePost = "tbl_post";
       $tableCat  = "tbl_catergory";
       $postModel = $this->load->model("PostModel");
       $data['postById'] = $postModel->getPostById($tablePost, $tableCat, $id);
       $this->load->view("postDetails",$data);

       $this->load->view('saidbar');
       $this->load->view('footer');

    }

    public function getPostByCat($id)
    {
       $this->load->view('header');
       $data = array();
       $tablePost = "tbl_post";
       $tableCat  = "tbl_catergory";
       $postModel = $this->load->model("PostModel");
       $data['postByCat'] = $postModel->postByCat($tablePost, $tableCat, $id);
       $this->load->view("allPostByCat", $data);

       $this->load->view('saidbar');
       $this->load->view('footer');
    }
  



 }

?>