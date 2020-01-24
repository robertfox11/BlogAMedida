<?php
class Util{
public static function deleteSession($name){
		if(isset($_SESSION[$name])){
			$_SESSION[$name] = null;
			unset($_SESSION[$name]);
		}
		
		return $name;
	}
//function to admin 
	public static function isAdmin(){
		if(!isset($_SESSION['admin'])){
			header("Location:".URL);
		}else{
			return true;
		}
	}
	public static function showCategory(){
		require_once 'models/Category.php'; 
		$category = new Categoria();
		$categorys = $category->getCategory();
		return $categorys;
        
	}
}
?>