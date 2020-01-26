<?php 
require_once 'models/Comments.php';
class CommentsController{
    public function index(){
        // Util::isAdmin();
        $comment = new Comments();
        $comments = $comment->getComments();
        // var_dump($comments);
        require_once 'views/comments/index.php';
    }
    // public function entry(){
    //     Util::isAdmin();
    //     require_once 'views/category/entry.php';
    // }
    // public function saveCategory(){
    //     //usuario guardar category
    //     Util::isAdmin();
    //     if(isset($_POST) && isset($_POST['name'])){
	// 		// Guardar la categoria en bd
	// 		$categoria = new Categoria();
	// 		$categoria->setName($_POST['name']);
	// 		$save = $categoria->saveCategory();	
	// 	}
    //     header("Location:".URL."category/index");
    // }
}
?>