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
    	$data = array();
        $tablePost = "tbl_post";
        $tableCat = "tbl_catergory";
    	$this->load->view('header');

        $catModel = $this->load->model("CatModel");
        $data['catlistforsearch'] = $catModel->catList($tableCat);
    	$this->load->view('search', $data);
        
        $postModel = $this->load->model("PostModel");
        $data['allPost'] = $postModel->getAllPost($tablePost);
    	$this->load->view('content', $data);
        
        $data['catList'] = $catModel->catList($tableCat);
        $data['leatestPost'] = $postModel->getLeatestPost( $tablePost);
    	$this->load->view('saidbar', $data);
    	$this->load->view('footer');
    }

    public function postDetails($id)
    {
       $data = array();
       $tablePost = "tbl_post";
       $tableCat = "tbl_catergory";
       $this->load->view('header');
       $catModel = $this->load->model("CatModel");
       $data['catlistforsearch'] = $catModel->catList($tableCat);
       $this->load->view('search', $data);

       $postModel = $this->load->model("PostModel");
       $data['postById'] = $postModel->getPostById($tablePost, $tableCat, $id);
       $this->load->view("postDetails",$data);
       
       $data['catList'] = $catModel->catList($tableCat);
       $data['leatestPost'] = $postModel->getLeatestPost( $tablePost);
       $this->load->view('saidbar', $data);
       $this->load->view('footer');

    }

    public function getPostByCat($id)
    {
       $data = array();
       $tablePost = "tbl_post";
       $tableCat = "tbl_catergory";
       $this->load->view('header');
       $catModel = $this->load->model("CatModel");
       $data['catlistforsearch'] = $catModel->catList($tableCat);
       $this->load->view('search', $data);

       $postModel = $this->load->model("PostModel");
       $data['postByCat'] = $postModel->postByCat($tablePost, $tableCat, $id);
       $this->load->view("allPostByCat", $data);
      
       $data['catList'] = $catModel->catList($tableCat);
       $data['leatestPost'] = $postModel->getLeatestPost( $tablePost);
       $this->load->view('saidbar', $data);
       $this->load->view('footer');
    }
  



 }

?>