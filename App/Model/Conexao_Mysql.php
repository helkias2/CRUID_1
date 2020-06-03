<?php
    namespace App\Model;
    
    // 1 - Inicio pela criacao da conexao de banco de dados 
    // Tive alguns problema para fazer funcionar 

    class Conexao_Mysql {

        // Atributo static, essa variavel vai ser acessa via <self> e nao pelo <this>
        private static $bann;

        public static function getData(){
            // try catch para tratamento de erro e execoes
            try {
                if(!isset(self::$bann)):
                    // Usando o PDO para fazer minha conexao com banco mysql
                    // mysql, host = localhost, dbname = nome_banco | nome_da_conexao | senha_da_conexao  
                    self::$bann = new \PDO('mysql:host=localhost;dbname=pdo;', 'root','root');
                endif;
                return self::$bann;
            } catch (\PDOException $e) {
                "Erro: " + $php_errormsg;
            }
      
           
        }
    }