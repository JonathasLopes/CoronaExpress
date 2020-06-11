<?php
    class LoginMod {

        private $Email;
        private $Senha;

        function __construct($Email, $Senha){
            
            $this->Email = $Email;
            $this->Senha = $Senha;

        }

        public function setEmail($Email){
            $this->Email = $Email;
            return $Email;
        }

        public function getEmail(){
            return $this->Email;
        }

        public function setSenha($Senha){
            $this->Senha = $Senha;
            return $Senha;
        }

        public function getSenha(){
            return $this->Senha;
        }
    }
?>