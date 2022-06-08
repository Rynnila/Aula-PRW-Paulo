<?php
    class conexao{
        private static $instancia;

        public static function getConexao(){
            if(!isset(self::$instancia)){
                self::$instancia = new PDO('myslq:host=localhost; dbname:clinica;charset=utf8', 'root', 'root');
                return self::$instancia;
            }else{
                return self::$instancia;
            }
        }
    }
?>