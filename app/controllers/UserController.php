<?php 
  /**
  * User Controller
  */
  class UserController extends MainController
  {
  	
  	public function __construct()
  	{
  		parent::__construct();
  	}

  	public function makeUser()
  	{
       
  	}

  	public function userList()
  	{
        $this->load->view("Admin/header");
	    $this->load->view("Admin/sidebar");
		$tableUser = "tbl_user";
		$data        = array();
		$userModel    = $this->load->model('UserModel');
		$data['user'] = $userModel->userList($tableUser);
		$this->load->view("Admin/userList",$data);
		$this->load->view("Admin/footer");
  	}
  }

 ?>