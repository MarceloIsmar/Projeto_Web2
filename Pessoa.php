
<?php

    abstract class Pessoa {
        
        private $nome;
        private $idade;
        
        public function Pessoa(){
            echo "<p> Classe pessoa construida </p>";
        }
        
        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function setIdade($idade){
            $this->idade = $idade;
        }
        
        public function getIdade(){
            return $this->idade;
        }
        
                
    }
?>  
