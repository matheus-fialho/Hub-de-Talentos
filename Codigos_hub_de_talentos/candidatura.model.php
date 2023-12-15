<?php

    class Candidatura {
        private $id;
        private $id_vaga;
        private $id_candidato;
        private $id_cadastrou;
        
        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo,$valor){
            $this->$atributo = $valor;
        }
    }
    

?>