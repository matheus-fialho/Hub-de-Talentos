<?php

    class CandidatarService{

        private $conexao;
        private $candidatura;

        public function __construct(Conexao $conexao,Candidatura $candidatura){
            $this->conexao = $conexao->conectar();
            $this->candidatura = $candidatura;
        }

        public function inserir(){
            $query = 'insert into tb_candidaturas(id_vaga,id_candidato,id_cadastrou)values(:id_vaga,:id_candidato,:id_cadastrou)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id_vaga', $this->candidatura->__get('id_vaga'));
            $stmt->bindValue(':id_candidato', $this->candidatura->__get('id_candidato'));
            $stmt->bindValue(':id_cadastrou', $this->candidatura->__get('id_cadastrou'));
            $stmt->execute();
        }

        public function recuperar(){
            $query = 
            'SELECT 
                tc.id, us.email, tc.id_vaga, tc.id_cadastrou
            FROM
                tb_candidaturas AS tc
            LEFT JOIN tb_usuarios AS us ON (tc.id_candidato = us.id)'
    
            ;
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function atualizar(){
            
        }

        public function remover(){
            
        }
    }

?>