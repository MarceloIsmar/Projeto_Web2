<?php
    require_once 'Pessoa.php';
    
    class Aluno extends Pessoa{
        private $ra;
        
        public function setRA($ra) {
            $this->ra = $ra;
        }
        
        public function getRa(){
            return $this->ra;
        }
        
    }
?>  

