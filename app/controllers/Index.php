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
    	$this->load->view('search');
        
        $data = array();
        $table = "tbl_post";
        $postModel = $this->load->model("PostModel");
        $data['allPost'] = $postModel->getAllPost($table);
    	$this->load->view('content', $data);
        
        $tableCat = "tbl_catergory";
        $catModel = $this->load->model("CatModel");
        $data['catList'] = $catModel->catList($tableCat);
        $data['leatestPost'] = $postModel->getLeatestPost( $table);
    	$this->load->view('saidbar', $data);
    	$this->load->view('footer');
    }

    public function postDetails($id)
    {
       $this->load->view('header');
       $this->load->view('search');

       $data = array();
       $tablePost = "tbl_post";
       $tableCat  = "tbl_catergory";
       $postModel = $this->load->model("PostModel");
       $data['postById'] = $postModel->getPostById($tablePost, $tableCat, $id);
       $this->load->view("postDetails",$data);
       
       $catModel = $this->load->model("CatModel");
       $data['catList'] = $catModel->catList($tableCat);
       $data['leatestPost'] = $postModel->getLeatestPost( $tablePost);
       $this->load->view('saidbar', $data);
       $this->load->view('footer');

    }

    public function getPostByCat($id)
    {
       $this->load->view('header');
       $this->load->view('search');
       
       $data = array();
       $tablePost = "tbl_post";
       $tableCat  = "tbl_catergory";
       $postModel = $this->load->model("PostModel");
       $data['postByCat'] = $postModel->postByCat($tablePost, $tableCat, $id);
       $this->load->view("allPostByCat", $data);
       
       $catModel = $this->load->model("CatModel");
       $data['catList'] = $catModel->catList($tableCat);
       $data['leatestPost'] = $postModel->getLeatestPost( $tablePost);
       $this->load->view('saidbar', $data);
       $this->load->view('footer');
    }
  



 }

?>