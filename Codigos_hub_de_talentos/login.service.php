<?php

    class LoginService{

        private $conexao;
        private $login;

        public function __construct(Conexao $conexao,Login $login){
            $this->conexao = $conexao->conectar();
            $this->login = $login;
        }

        public function recuperar_login($email, $senha){
            $query = 
                    'SELECT 
                    id, email, senha, id_perfil
                    FROM 
                    tb_usuarios
                    WHERE email= "'.$email.'" AND senha = "'.$senha.'"
                    '
            ;
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>


