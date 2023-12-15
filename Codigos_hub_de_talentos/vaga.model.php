<?php

    class Vaga {
        private $id;
        private $titulo;
        private $modalidade;
        private $salario;
        private $descricao;
        private $id_perfil;
        private $id_usuario;

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo,$valor){
            $this->$atributo = $valor;
        }
    }
    

?>