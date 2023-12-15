<?php
    class Login{
        private $id;
        private $email;
        private $senha;
        private $perfil;

        public function __get($atributo){
            return $this->$atributo;
        }
    }
?>