<?php

    class CadastroMod {
        private $Nome;
        private $Sobrenome;
        private $CPF;
        private $Sexo;
        private $DtNascimento;
        private $Cep;
        private $Rua;
        private $Numero;
        private $Complemento;
        private $Cidade;
        private $Estado;
        private $EstadoCivil;
        private $TelRes;
        private $Celular;
        private $Email;
        private $Senha;

        function __construct($Nome, $Sobrenome, $CPF, $Sexo, $DtNascimento, 
        $Cep, $Rua, $Numero, $Complemento, $Cidade, $Estado, $EstadoCivil, 
        $TelRes, $Celular, $Email, $Senha){
            
            $this->Nome = $Nome;
            $this->Sobrenome = $Sobrenome;
            $this->CPF = $CPF;
            $this->Sexo = $Sexo;
            $this->DtNascimento = $DtNascimento;
            $this->Cep = $Cep;
            $this->Rua = $Rua;
            $this->Numero = $Numero;
            $this->Complemento = $Complemento;
            $this->Cidade = $Cidade;
            $this->Estado = $Estado;
            $this->EstadoCivil = $EstadoCivil;
            $this->TelRes = $TelRes;
            $this->Celular = $Celular;
            $this->Email = $Email;
            $this->Senha = $Senha;

        }

        public function setNome($Nome){
            $this->Nome = $Nome;
            return $Nome;
        }

        public function getNome(){
            return $this->Nome;
        }

        public function setSobrenome($Sobrenome){
            $this->Sobrenome = $Sobrenome;
            return $Sobrenome;
        }

        public function getSobrenome(){
            return $this->Sobrenome;
        }

        public function setCPF($CPF){
            $this->CPF = $CPF;
            return $CPF;
        }

        public function getCPF(){
            return $this->CPF;
        }

        public function setSexo($Sexo){
            $this->Sexo = $Sexo;
            return $Sexo;
        }

        public function getSexo(){
            return $this->Sexo;
        }

        public function setDtNascimento($DtNascimento){
            $this->DtNascimento = $DtNascimento;
            return $DtNascimento;
        }

        public function getDtNascimento(){
            return $this->DtNascimento;
        }

        public function setCep($Cep){
            $this->Cep = $Cep;
            return $Cep;
        }

        public function getCep(){
            return $this->Cep;
        }

        public function setRua($Rua){
            $this->Rua = $Rua;
            return $Rua;
        }

        public function getRua(){
            return $this->Rua;
        }

        public function setNumero($Numero){
            $this->Numero = $Numero;
            return $Numero;
        }

        public function getNumero(){
            return $this->Numero;
        }

        public function setComplemento($Complemento){
            $this->Complemento = $Complemento;
            return $Complemento;
        }

        public function getComplemento(){
            return $this->Complemento;
        }

        public function setCidade($Cidade){
            $this->Cidade = $Cidade;
            return $Cidade;
        }

        public function getCidade(){
            return $this->Cidade;
        }

        public function setEstado(){
            $this->Estado = $Estado;
            return $Estado;
        }

        public function getEstado(){
            return $this->Estado;
        }

        public function setEstadoCivil($EstadoCivil){
            $this->EstadoCivil = $EstadoCivil;
            return $EstadoCivil;
        }

        public function getEstadoCivil(){
            return $this->EstadoCivil;
        }

        public function setTelRes($TelRes){
            $this->TelRes = $TelRes;
            return $TelRes;
        }

        public function getTelRes(){
            return $this->TelRes;
        }

        public function setCelular($Celular){
            $this->Celular = $Celular;
            return $Celular;
        }

        public function getCelular(){
            return $this->Celular;
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