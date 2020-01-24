<?php 
require_once 'models/Category.php';
class CategoryController{
    public function index(){
        $category = new Categoria();
        $categorys = $category->getCategory();
        var_dump($categorys);
 
        require_once 'views/category/index.php';
    }
    public function entry(){
        require_once 'views/category/entry.php';
    }
    public function saveCategory(){
        
    }
}
?>