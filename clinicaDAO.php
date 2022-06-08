<?php
include 'conexao.php';
    class clinicaDAO{
        public function consultalogin(Clinica $clinica){
            $query = "select login from usuario where login=? and senha=?";
            $conexao= new Conexao();
            $con= $conexao->getConexao();
            $valores = $con-> prepare($query);
            $valores->bindValue(1, $clinica->getCPFPaciente());
            $valores->bindValue(2, $clinica->getSenhaLogin());
            $valores->execute();

            if($valores->rowCount()>0){
                $resultado = $valores->fetchAll(\PDO::FETCH_ASSOC);
                RETURN $resultado;
            }
        }
    }
?>