<?php 
require_once("models/productos_models.php");
class shop_controllers{
    public static function shop1(){
        require_once("views/templates/header.php");
        require_once("views/templates/navbar.php");
        require_once("views/peli.php");
        require_once("views/templates/footer.php");
    }
    public static function validar(){
        if ($_POST) {
            $token= filter_var($_POST["token"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $_SESSION["token"] = $_POST["token"] ;
            if (!isset($_POST["token"]) || !seg::validaSession($_POST["token"])) {
                echo "Acceso restringido";
                exit();
            }

            $id= filter_var($_POST["id"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $obj = new productos_models($id);
            
           
        }
    }
}
?>