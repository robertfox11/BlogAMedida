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
    public function entry(){
        // Util::isAdmin();
        require_once 'views/comments/entry.php';
    }
    public function saveComments(){
        //usuario guardar Comments
        // Util::isAdmin();
        if (isset($_POST)){
            $categoria_id = isset($_POST['categoria_id']) ? $_POST['categoria_id'] : false;
            $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;        
            // Guardar la categoria en bd
            echo "has Guardado";
            if ($categoria_id && $titulo && $descripcion) {
                $comments = new Comments();
                $comments->setCategoria_id($categoria_id);
                $comments->setTitulo($titulo);
                $comments->setDescripcion($descripcion);

                var_dump($comments);
                
                $save = $comments->saveComment();
                var_dump($save);
                if ($save) {
                    $_SESSION['register'] ="complete";
                }else{
                    $_SESSION['register']="failed";
                }
            }else{
                $_SESSION['register']="failed";
            }
        }else{
            $_SESSION['ragister'] = "failed";
            //si llega fallo
        }
        // header("Location:".URL."comments/index");
    }
}
?>