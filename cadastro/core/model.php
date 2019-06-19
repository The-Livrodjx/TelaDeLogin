<?php
    class model {
        protected $pdo;

        public function __construct(){
            global $config;

            try {
                $this->pdo = new PDO("mysql:dbname=".$config["dbname"].";host=".$config["host"], $config["dbuser"], $config["dbpass"]);
            }
            catch(PDOException $e){
                echo "Falhou : ".$e->getMessage();
            }
        }

        public function create($nome, $email, $senha) {
            $nome_protegido = addslashes($nome);
            $email_protegido = addslashes($email);
            $senha_protegida = md5($senha."af54a1fa65d2d");
            $sql = "INSERT INTO usuarios SET nome = '$nome_protegido', email = '$email_protegido', senha = '$senha_protegida' ;";
            $this->pdo->query($sql);
        }

        public function result($id) {
            $id_protegido = addslashes($id);

            $sql = "SELECT * FROM usuarios WHERE id = '$id_protegido'";
            $sql = $this->pdo->query($sql);

            if($sql->rowCount() > 0) {
                return $sql;
            }
        }

        public function update($email, $senha, $novoEmail, $NovaSenha){
            $email_protegido = addslashes($email);
            $senha_protegida = md5($senha."af54a1fa65d2d");
            $novoEmail_protegido = addslashes($novoEmail);
            $novaSenha_protegida = md5($NovaSenha."af54a1fa65d2d");

            if(isset($email) && !empty($email) && isset($senha) &&
            !empty($senha) && isset($novoEmail_protegido) && !empty($novoEmail_protegido) 
            && isset($novaSenha_protegida) && !empty($novaSenha_protegida)){

                $sql = "UPDATE usuarios SET email = '$novoEmail_protegido', senha = '$novaSenha_protegida'
                WHERE email = '$email_protegido', senha = '$novaSenha_protegida';";

                $this->pdo->query($sql);
            }
        }

        protected function delete($id) {
            $sql = "DELETE FROM usuarios WHERE id = '$id'";
            $this->pdo->query($sql); 
        }

    }
?>