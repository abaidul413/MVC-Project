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
       $this->load->view("Admin/header");
	   $this->load->view("Admin/sidebar");

	   $this->load->view("Admin/makeUser");
	   $this->load->view("Admin/footer");
  	}

  	public function makeNewUser()
  	{
  	    $form = $this->load->validation("Form");
     	$form->post("username");
     	$form->post("password");
     	$form->post("level");

     	$tableUser = "tbl_user";
     	$username  = $form->values['username'];
     	$password  = md5($form->values['password']);
     	$level     = $form->values['level'];
     	$data = array(
     		  'username' => $username,
     		  'password' => $password,
     		  'level'    => $level
     		);

     	$userModel = $this->load->model('UserModel');
     	$result    = $userModel->addUser($tableUser, $data);

     	$message = array();
        if($result == 1){
          $message['msg']  = "User Added Successfully";
        }else{
           $message['msg'] = "Failed to Add User";
        }
        $url = BASE_URL."/UserController/userList?msg=".urlencode(serialize($message));
        header("Location:$url");
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