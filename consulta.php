<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-lg-6 mx-auto">
        <h2 class="page-section-heading text-center text-uppercase
        text-secondary">CONSULTA</h2>

        <form method="post" action="consultanome.php">
        
        <div class="form-group">
        <div class="control-group">
            <label for="nome">Escolha um nome</label>
            <br>
            <select class="custom-select mr-sm-2" name="nome" id="nome">
            <?php
                include 'conecta.inc';
                $resul = mysqli_query($con, "Select nome from tbalunos");
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
                    while ($row = mysqli_fetch_array($resul))
                    {
                        echo '<option value="'.$row['nome'].'">'.$row['nome'].'</option>';
                    }
                    echo '<option value="todos"> Todos </option>';
                    echo '</select>';
  
                }
                       
            ?>
       
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Consultar</button>
            </form>

            <br> <br>

            <form method="post" action="consultacurso.php">
        
            <div class="form-group">
            <div class="control-group">
            <label for="nome">Escolha um Curso</label>
            <br>
            <select class="custom-select mr-sm-2" name="curso" id="curso">
            <?php
                include 'conecta.inc';
                $resul = mysqli_query($con, "Select distinct curso from tbalunos");
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
                    while ($row = mysqli_fetch_array($resul))
                    {
                        echo '<option value="'.$row['curso'].'">'.$row['curso'].'</option>';
                    }
                    echo '<option value="todos"> Todos </option>';
                    echo '</select>';
  
                }
                       
            ?>
       
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Consultar</button>
            </form>
            </div>
            </div>
            </div>
</body>
</html>