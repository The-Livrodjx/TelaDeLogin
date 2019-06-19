<?php
    class loginController extends controller {

        public function index(){
            $usuario = new Usuario();

            $dados = array();

            if(!empty($_POST["nome"]) && isset($_POST["nome"]) &&
            !empty($_POST["email"]) && isset($_POST["email"]) &&
            !empty($_POST["senha"]) && isset($_POST["senha"])) {

                if($usuario->usuarioExiste($_POST["email"], $_POST["senha"])) {
                    session_start();
                    $_SESSION["id"] = $_POST["email"];
                    header("Location: /home");
                }

                else {
                    echo "<h1>Email ou senha inválidos</h1>";
                }
            }

            $this->loadView("login", $dados);
        }

        public function criar(){
            $usuario = new Usuario();

            $dados = array();

            if(!empty($_POST["nome"]) && isset($_POST["nome"]) &&
            !empty($_POST["email"]) && isset($_POST["email"]) &&
            !empty($_POST["senha"]) && isset($_POST["senha"])) {

                if($usuario->usuarioExiste($_POST["email"], $_POST["senha"]) == false) {
                    $usuario->create($_POST["nome"], $_POST["email"], $_POST["senha"]);
                    session_start();
                    $_SESSION["id"] = $_POST["email"];
                    header("Location: /home");
                }

                else {
                    echo "<h1>Usuário já existe, tente outro E-mail</h1>";
                }
            }

            $this->loadView("criar", $dados);
        }

        public function sair() {
            $usuario = new Usuario();
            header("Location: /login");
        }
    }
?>