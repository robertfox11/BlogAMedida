<?php 
require_once 'models/Category.php';
class CategoryController{
    public function index(){
        $category = new Categoria();
        $categorys = $category->getCategory();
        var_dump($categorys);
 
        require_once 'views/category/index.php';
    }
}
?>