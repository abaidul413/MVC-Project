<?php 
  /**
  * Category model
  */
  class CatModel{
  	
  	public function __construct()
  	{
  		//echo "category model will go here";
  	}
    
    public function catList()
    {
    	return array(
    	    array(
    		'catone'   => 'Education' , 
    		'cattwo'   => 'Sports' , 
    		'catthree' => 'Health'
    		),
	        array(
			'catone'   => 'Education' , 
			'cattwo'   => 'Sports' , 
			'catthree' => 'Health'
			) 

    		);
    }
   
  }

?>