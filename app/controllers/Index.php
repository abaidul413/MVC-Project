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
     
 }

?>