
<?php

    try{
        $pdo = new  PDO("mysql:host=localhost;dbnome=web2", "root", "root123");
    }
    catch(PODException $erro){
        echo $erro-> getMessage();
        }   
        
        
       require_once 'Aluno.php';
       $aluno = new Aluno();
        
       $aluno->setNome($_POST['nome']);
       $aluno->setIdade($_POST['idade']);
        
       try{
           $sql = "INSERT INTO aluno(nome, idade) VALUES ('$aluno->getNome()', '$aluno->getIdade()')";
           $pdo->exec($sql); 
           echo "Inserindo com sucesso.";
           
                 } catch (PODException $ex) {
                     die("Nao e possivel executar : $sql " . $ex->getMessage());
       }
                
    
?>  
