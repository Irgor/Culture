<?php
    class Usuario{//Nome de Classe

        //Atributos
        private $cod;
        private $nome;
        private $email;
        private $senha;
        private $img;
        private $dtNasc;

        //Metodos Get's e Set's
        public function getCod(){
            return $this->cod;
        }

        public function setCod($cod){
            $this->cod = $cod;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($name){
            $this->nome = $name;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getImg(){
            return $this->img;
        }

        public function setImg($img){
            $this->img = $img;
        }

        public function getDtNasc(){
            return $this->dtNasc;
        }

        public function setDtNasc($dtNasc){
            $this->dtNasc = $dtNasc;
        }
        
    }
?>