    
<hmtl>
    <head>
        <title>ATIVIDADE WEB 2</title>
        <meta charset="UTF-8"/>
        //     <script>
            //             function saidaNome(){
            //              var nomeJS = document.getElementById('nomeID').value;
            //              alert(nomeJS);
            //          }
            //    </script>
    </head>
    <body>

        <form action="SalvaAluno.php" method="POST">
            <fieldset>
                <legend>Informe seus dados</legend>
                </br></br>

                <label>Nome: </label>
                <input type="texts" name="nome" id="nomeID">
                </br></br>

                <label>Idade: </label>
                <input type="text" name="idade">
                </br></br>

                <label>Sexo: </label>
                <input type="radio" name="sexo" value="Masculino"> Masculino
                <input type="radio" name="sexo" value="Feminino"> Feminino

                </br></br>
                <input type="submit" value="Enviar"/>
            </fieldset>
        </form>


        <?php
            if (!empty($_POST)) {
              require_once 'Aluno.php';
              $aluno = new Aluno();

                var_dump($aluno);
               $aluno->setNome($_POST['nome']);
                $aluno->setIdade($POST['idade']);
              echo"</br>";
              var_dump($aluno);
         }
        ?>  

    </body>    
</html>
