<?php
class Util{
public static function deleteSession($name){
		if(isset($_SESSION[$name])){
			$_SESSION[$name] = null;
			unset($_SESSION[$name]);
		}
		
		return $name;
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