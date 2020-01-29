<?php 
require_once 'models/Category.php';
class CategoryController{
    public function index(){
        Util::isAdmin();
        $category = new Categoria();
        $categorys = $category->getCategory();
        // var_dump($categorys);
        require_once 'views/category/index.php';
    }
    public function entry(){
        Util::isAdmin();
        require_once 'views/category/entry.php';
    }
    public function saveCategory(){
        //usuario guardar category
        Util::isAdmin();
        if(isset($_POST) && isset($_POST['name'])){
			// Guardar la categoria en bd
			$categoria = new Categoria();
			$categoria->setName($_POST['name']);
			$save = $categoria->saveCategory();	
		}
        header("Location:".URL."category/index");
    }
    public function updateCategory(){
        Util::isAdmin();
        if (isset($_GET['id'])) {
            
        }
        
    }
    public function deleteCategory(){
        var_dump($_GET);
        Util::isAdmin();
        $id = $_GET['id'];
        if (isset($_GET['id'])) {
            $delete = new Categoria();
            $delete->setId($id);
            $deletes = $delete->deleteCategory();
            if ($deletes) {
                $_SESSION['delete'] = 'complete';
            }else{
                $_SESSION['delete'] ='failed';
            }
        }else{
            $_SESSION['delete'] ='failed';
        }
        header('Location:'.URL.'category/index');
    }
}
?>