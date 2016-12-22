<?php 
/**
* Admin Class
*/
class Admin extends MainController
{
	
	public function __construct()
	{
	  Session::checkSession();
	  parent::__construct();
	}

	public function Index()
	{
		$this->admin();
	}

   public function admin()
   {
	$this->load->view("Admin/header");
	$this->load->view("Admin/sidebar");
	$this->load->view("Admin/admin");
	$this->load->view("Admin/footer");
   }

    public function addCategory()
    {
    	$this->load->view("Admin/header");
	    $this->load->view("Admin/sidebar");
    	$this->load->view('Admin/addCategory');
    	$this->load->view("Admin/footer");
    }

    public function insertCategory()
    {
    	$table    = "tbl_catergory";
        $cat_name = $_POST['cat_name'];
        $title    = $_POST['title'];

    	$data  = array(
    		   'cat_name' => $cat_name,
    		   'title'    => $title
    		);
    	$catModel = $this->load->model("CatModel");
    	$result = $catModel->catInsert($table, $data);
        
        $message = array();
    	if ($result == 1) {
    		$message['msg'] = "Category Added Successfully!!";
    	} else {
    		$message['msg'] = "Failed To Add Category";
    	}
    	$url = BASE_URL."/Admin/categoryList?msg=".urlencode(serialize($message));
       header("Location:$url");
    }

    public function categoryList()
    {
		$this->load->view("Admin/header");
	    $this->load->view("Admin/sidebar");
		$table = "tbl_catergory";
		$data        = array();
		$catModel    = $this->load->model('CatModel');
		$data['cat'] = $catModel->catList($table);
		$this->load->view("Admin/categoryList",$data);
		$this->load->view("Admin/footer");
    }

    public function editCat($id = NULL)
    {
    	$this->load->view("Admin/header");
	    $this->load->view("Admin/sidebar");
    	$table = "tbl_catergory";
    	$id    = $id;
    	$data  = array();
    	$catModel = $this->load->model("CatModel");
    	$data['editcatById'] = $catModel->catById($table, $id);
    	$this->load->view("Admin/editCate",$data);
    	$this->load->view("Admin/footer");
    }

     public function categoryUpdate()
    {
    	$table = "tbl_catergory";
    	$cat_name = $_POST['cat_name'];
    	$title    = $_POST['title'];
    	$id       = $_POST['id'];

    	$cond  = "id=$id";
    	$data  = array(
    		    'cat_name' => $cat_name,
    		    'title'    => $title
    		);
    	$catModel = $this->load->model("CatModel");
    	$result   = $catModel->updateCategory($table, $data, $cond);
    	$message  =array();
    	if ($result == 1) {
    		$message['msg'] = "Category Updated Successfully!!";
    	} else {
    		$message['msg'] = "Failed To Update Category!!";
    	}
       $url = BASE_URL."/Admin/categoryList?msg=".urlencode(serialize($message));
       header("Location:$url");
    }

     public function deleteCategoryById($id)
     {
    	$table = "tbl_catergory";
    	$cond = "id=$id";
    	$catModel = $this->load->model("CatModel");
    	$result = $catModel->delCategoryById($table, $cond);
    	$message  =array();
    	if ($result == 1) {
    		$message['msg'] = "Category Delete Successfully!!";
    	} else {
    		$message['msg'] = "Failed To Delete Category!!";
    	}
       $url = BASE_URL."/Admin/categoryList?msg=".urlencode(serialize($message));
       header("Location:$url");
     }

     public function addArticle()
     {
     	$data = array();
     	$tableCat = "tbl_catergory";
     	$this->load->view("Admin/header");
	    $this->load->view("Admin/sidebar");

        $catModel = $this->load->model("CatModel");
        $data['catList'] = $catModel->catList($tableCat);

    	$this->load->view("Admin/addPost", $data);
    	$this->load->view("Admin/footer");

     }

     public function articlList()
     {
     	$data = array();
     	$tablePost = "tbl_post";
     	$tableCat  = "tbl_catergory";

        $this->load->view("Admin/header");
	    $this->load->view("Admin/sidebar");
 
        $postModel = $this->load->model("PostModel");
        $data["getPost"] = $postModel->getPostAll($tablePost);

        $catModel = $this->load->model("CatModel");
        $data['catlist'] = $catModel->catList($tableCat);

    	$this->load->view("Admin/postList",$data);
    	$this->load->view("Admin/footer");
     }

     public function insertPost()
     {
     	$form = $this->load->validation("Form");
     	$form->post("post_title")
     	     ->isEmpty()
     	     ->length(10, 500);

     	$form->post("post_content")
     	     ->isEmpty();
     	
     	$form->post("category")
     	     ->isEmptyCat(); 

    if ($form->submit()) {
    	$tablePost    = "tbl_post"; 
     	$post_title   = $form->values['post_title'];
     	$post_content = $form->values['post_content'];
     	$category     = $form->values['category'];

     	$data = array(
     		  'post_title'   => $post_title,
     		  'post_content' => $post_content,
     		  'category'     => $category
     		);

     	$postModel = $this->load->model("PostModel");
     	$result    = $postModel->insertPost($tablePost, $data);
     	$message = array();
        if($result == 1){
          $message['msg']  = "Post Added Successfully";
        }else{
           $message['msg'] = "Failed to added Post";
        }
        $url = BASE_URL."/Admin/articlList?msg=".urlencode(serialize($message));
        header("Location:$url");
    } else {

    	$data = array();
    	$data['errorsPost'] = $form->errors;
     	$tableCat = "tbl_catergory";
     	$this->load->view("Admin/header");
	    $this->load->view("Admin/sidebar");

        $catModel = $this->load->model("CatModel");
        $data['catList'] = $catModel->catList($tableCat);

    	$this->load->view("Admin/addPost", $data);
    	$this->load->view("Admin/footer");
    }
    
  }

  public function editPost($id){
  	    $data = array();
     	$tablePost = "tbl_post";
     	$tableCat  = "tbl_catergory";

        $this->load->view("Admin/header");
	    $this->load->view("Admin/sidebar");
 
        $postModel = $this->load->model("PostModel");
        $data["getPostById"] = $postModel->PostById($tablePost, $id);

        $catModel = $this->load->model("CatModel");
        $data['catlist'] = $catModel->catList($tableCat);

    	$this->load->view("Admin/postEdit",$data);
    	$this->load->view("Admin/footer");
  }

  public function updatePost(){
  	$form = $this->load->validation("Form");
  	    $form->post("id");
     	$form->post("post_title");
     	$form->post("post_content");
     	$form->post("category");

     	$tablePost    = "tbl_post";
     	$id = $form->values['id'];
     	$post_title   = $form->values['post_title'];
     	$post_content = $form->values['post_content'];
     	$category     = $form->values['category'];
        $con = "id = $id";
     	$data = array(
     		  'post_title'   => $post_title,
     		  'post_content' => $post_content,
     		  'category'     => $category
     		);

     	$postModel = $this->load->model("PostModel");
     	$result    = $postModel->updatePost($tablePost, $data, $con);

     	$message = array();
        if($result == 1){
          $message['msg']  = "Post Updated Successfully";
        }else{
           $message['msg'] = "Failed to Update Post";
        }
        $url = BASE_URL."/Admin/articlList?msg=".urlencode(serialize($message));
        header("Location:$url");
  }

  public function deletePost($id)
  {
  	$tablePost    = "tbl_post";
	$cond = "id=$id";
	$postModel = $this->load->model("PostModel");
	$result = $postModel->delPostById($tablePost, $cond);
	$message  =array();
	if ($result == 1) {
		$message['msg'] = "Post Delete Successfully!!";
	} else {
		$message['msg'] = "Failed To Delete Post!!";
	}
   $url = BASE_URL."/Admin/articlList?msg=".urlencode(serialize($message));
   header("Location:$url");
  }

  public function uiOption(){
        $data = array();
        $tableUi = "tbl_color";
        $uiModel = $this->load->model("UiModel");
        $data['color']  = $uiModel->getColor($tableUi);
        $this->load->view("Admin/header", $data);
        $this->load->view("Admin/sidebar");
        $this->load->view('Admin/changUI');
        $this->load->view("Admin/footer");
  }

  public function chahngUiBack()
  {
    $form = $this->load->validation("Form");
        $form->post("color");

        $tableUi = "tbl_color";
        $color   = $form->values['color'];
        $con     = 1;
        $data = array(
              'color' => $color
            );

        $uiModel = $this->load->model("UiModel");
        $result  = $uiModel->updateColor($tableUi, $data, $con);

        $message = array();
        if($result == 1){
          $message['msg']  = "Background Change Successfully";
        }else{
           $message['msg'] = "Failed to Change Background";
        }
        $url = BASE_URL."/Admin/uiOption?msg=".urlencode(serialize($message));
        header("Location:$url");
  }

  // public function getBackColor()
  // {
  //   $data = array();
  //   $tableUi = "tbl_color";
  //   $uiModel = $this->load->model("UiModel");
  //   $data['color']  = $uiModel->getColor($tableUi);
  //   $this->load->view("Admin/header", $data);
  //   $this->load->view("Admin/sidebar");
  //   $this->load->view('Admin/changUI');
  //   $this->load->view("Admin/footer");
  // }
        
}

?>