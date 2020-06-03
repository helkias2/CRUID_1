<?php

    namespace App\Model;

    use App\Model\Conexao_Mysql;

    class ProdutosDao{
        
        public  function create(Produto $p){
            $sql = "INSERT INTO tbprodutos set nome=:nome, descricao=:descricao";
            $sql = Conexao_Mysql::getData()->prepare($sql);
            $sql->bindValue(':nome',$p->getNome());
            $sql->bindValue(':descricao', $p->getDescricao());
            $sql->execute();
            print_r($sql->errorInfo());
        }
        public  function read(){
            $sql = "SELECT * FROM tbprodutos";
            $sql = Conexao_Mysql::getData()->prepare($sql);
            $sql->execute();
            $array = array();
            if($sql->rowCount() > 0){
                return $array = $sql->fetchAll();
            }
        }
        public  function update(Produto $p){
            
            $sql = "UPDATE tbprodutos SET nome=:nome, descricao=:descricao, qtdprod=:qtdprod WHERE id=:id";
            $sql = Conexao_Mysql::getData()->prepare($sql);
            $sql->bindValue(':id', (int) $p->getId());
            $sql->bindValue(':nome', $p->getNome());
            $sql->bindValue(':descricao', $p->getDescricao());
            $sql->bindValue(':qtdprod', $p->getQtdprod());
            $sql->execute();
            print_r($sql->errorInfo());
        }

        public  function delete($id){
            var_dump($id->getId());

            $sql = "DELETE FROM tbprodutos WHERE id=:id";
            $sql = Conexao_Mysql::getData()->prepare($sql);
            $sql->bindValue(':id', $id->getId());
            $sql->execute();
            print_r($sql->errorInfo());
        }
    }