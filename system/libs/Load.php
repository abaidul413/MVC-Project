<?php
/**
* Load colass
*/
class Load{
	
	public function __construct(){	}

	public function view($fileName, $data = NULL)
	{
       include 'app/views/'.$fileName.'.php';
	}

	public function model($fileName)
	{
		include 'app/models/'.$fileName.'.php';
		return new $fileName;
	}
}

?>