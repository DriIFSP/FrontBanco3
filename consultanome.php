<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<button><a href="consulta.php"> Voltar </a></button>

<?php
    include 'conecta.inc';

    $nome = $_POST["nome"];

    if($nome == "todos")
        $resul = mysqli_query($con, "Select * from tbalunos  order by nome");
    else 
        $resul = mysqli_query($con, "Select * from tbalunos where nome='$nome'");
    
        $total = mysqli_num_rows($resul);

    if($total < 1)
    {
        echo "<script>
            alert('Não há dados na base');
            location. href = 'cadastra.html';
            </script>";
            //aqui você poderia usar history.back() se tivesse uma paǵina anterior com o menu
    }
    else
    {
       ?> 
        <div class="container">
        <div class="row">
        <div class="col-lg-6 mx-auto">
        <h2 class="page-section-heading text-center text-uppercase
        text-secondary">CONSULTA</h2>
       <br>
       <br>
    

       <?php

        echo "<center> <table border='1'>";
        echo "<tr><th>NOME</th> <th> EMAIL</th> <th> CURSO</th></tr>";
       
        while ($row = mysqli_fetch_array($resul))
        {
          
            echo '<tr><td>'.$row['nome'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            echo '<td>'.$row['curso'].'</td></tr>';

        
        }

        echo "</table></center>";


    }

    ?>
    </div>
    </div>
    </div>


    
</body>
</html>


