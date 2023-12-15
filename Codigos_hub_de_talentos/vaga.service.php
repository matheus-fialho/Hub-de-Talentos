<?php

    class VagaService{

        private $conexao;
        private $vaga;

        public function __construct(Conexao $conexao,Vaga $vaga){
            $this->conexao = $conexao->conectar();
            $this->vaga = $vaga;
        }

        public function inserir(){
            
            $query = 'insert into tb_vagas(salario,descricao,titulo,id_perfil,id_modalidade,id_usuario)values(:salario,:descricao,:titulo,:id_perfil,:modalidade,:id_usuario)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':salario', $this->vaga->__get('salario'));
            $stmt->bindValue(':descricao', $this->vaga->__get('descricao'));
            $stmt->bindValue(':titulo', $this->vaga->__get('titulo'));
            $stmt->bindValue(':id_perfil', $this->vaga->__get('id_perfil')); 
            $stmt->bindValue(':modalidade', $this->vaga->__get('modalidade'));
            $stmt->bindValue(':id_usuario', $this->vaga->__get('id_usuario'));
            $stmt->execute();
            
        }

        public function recuperar($perfil, $id_usuario){
            if($perfil==1){
                $query = 
                        'SELECT *
                           FROM tb_vagas AS t
                           LEFT JOIN tb_modalidades AS m ON (t.id_modalidade = m.id)
                          WHERE t.id_usuario = '.$id_usuario.''
                ;
                $stmt = $this->conexao->prepare($query);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_OBJ); 
            }else{
                $query = 
                        'SELECT *
                           FROM tb_vagas AS t
                           LEFT JOIN tb_modalidades AS m ON (t.id_modalidade = m.id)'
                ;
                $stmt = $this->conexao->prepare($query);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_OBJ); 
            }
            
        }

        public function atualizar(){
            
        }

        public function remover(){
            
        }
    }

?>