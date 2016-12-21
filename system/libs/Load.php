<?php
/**
* Load colass
*/
class Load{
	
	public function __construct(){	}

	public function view($fileName, $data = false)
	{
		if($data == true){
           extract($data);
		}
       include 'app/views/'.$fileName.'.php';
	}

	public function model($fileName)
	{
		include 'app/models/'.$fileName.'.php';
		return new $fileName;
	}

	public function validation($fileName)
	{
		include 'app/validation/'.$fileName.'.php';
		return new $fileName;
	}
}

?>