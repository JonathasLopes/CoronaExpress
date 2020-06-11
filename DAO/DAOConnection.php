<?php
    class DAOConnection{

        public function conect(){
            $Connection;
            $host = '127.0.0.1';
            $banco = 'Ecommerce';
            $usuario = 'root';
            $senha = '123456';
            $bd = "mysql:host=$host;dbname=$banco";

            try{
                $this->Connection = new PDO($bd, $usuario, $senha);
                $this->Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->Connection;
            }catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        }
    }
?>