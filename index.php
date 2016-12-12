
<?php 
 include 'system/libs/Main.php';
 include 'system/libs/MainController.php';
 include 'system/libs/Load.php';
 
 $url = isset($_GET['url']) ? $_GET['url'] : NULL;
 if ($url != NULL) {
 	$url = rtrim($url, '/');
    $url = explode("/", filter_var($url,FILTER_SANITIZE_URL));
 } else {
 	unset($url);
 }
 
 
 if (isset($url[0])) {
 	include 'app/controllers/'.$url[0].'.php';
    $ctlr = new $url[0]();

    if (isset($url[2])) {
    	$a = $url[1];
    	$ctlr->$a($url[2]);
    } else {
    	if (isset($url[1])) {
    		$a = $url[1];
    		$ctlr->$a();
    	} else {
    		# code...
    	}
    	
    }
    
 } else{
 	include 'app/controllers/Index.php';
 	$index = new Index();
 	$index->home();
 }
 










 // echo $controller = $url[0]."<br>";
 // echo $method = $url[1]."<br>";
 // echo $param = $url[2]."<br>";


?>

