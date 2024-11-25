<?php
    include 'conecta.inc';
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $curso=$_POST["curso"];
    echo $nome;


    $resul = mysqli_query($con, "Select * from tbalunos where nome='$nome' and email='$email'");
    $total = mysqli_num_rows($resul);

    echo $total;
   

    if($total < 1)
    {
        $sql = "Insert into tbalunos (nome, email, curso) values ('$nome', '$email', '$curso')";
        mysqli_query($con, $sql) or die ("Erro insert");
        echo "<script>
            alert('Aluno cadastrado com sucesso');
            history.back();
            </script>";
    }
    else
    {
        echo "<script>
         alert('Já foi cadastrado anteriormente');
         history.back();
         </script>";
    }



?>