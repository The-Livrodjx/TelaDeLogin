<?php
    class Usuario extends model {

        // Fiz essa classe só pra ficar organizado :)

        public function usuarioExiste($email, $senha){
            $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha = '$senha'";
            $sql = $this->pdo->query($sql);

            if($sql->rowCount() > 0){
                return true;
            }
            else{
                false;
            }
        }

        public function isLogged() {
            if(isset($_SESSION["id"]) && !empty($_SESSION["id"])) {
                return true;
            }
            else {
                return false;
            }
        }
    }
?>