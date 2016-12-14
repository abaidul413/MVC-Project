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
    	$this->load->view('home');
    	$this->load->view('saidbar');
    	$this->load->view('footer');
    }
     
 }

?>