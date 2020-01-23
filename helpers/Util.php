<?php
class Util{
public static function deleteSession($name){
		if(isset($_SESSION[$name])){
			$_SESSION[$name] = null;
			unset($_SESSION[$name]);
		}
		
		return $name;
	}
	public static function showCategory(){
		require_once 'models/Category.php'; 
		$category = new Categoria();
		$categorys = $category->getCategory();
		return $category;
        
	}
// function getCategory()
// {
// 	$sql = "SELECT * FROM category ORDER BY id ASC;";
// 	$category = mysqli_query($db, $sql);
// 	$result= array();
// 	if ($category && mysqli_num_rows($category) >=1) {
// 		$result = $category;
// 	}
// 	return $result;
// }

}
?>