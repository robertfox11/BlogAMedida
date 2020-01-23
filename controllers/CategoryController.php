<?php 
require_once 'models/Catetory.php';
class CategoryController{
    public function index(){
        $category = new Categoria();
        $categorys = $category->getCategory();
        require_once 'views/category/index.php';
    }
}
?>