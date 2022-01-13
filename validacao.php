<?php
    require 'conection.php';

    $aluno = $_POST['aluno'];
    $curso = $_POST['curso'];
    $cidade = $_POST['cidade'];
    $pgto = $_POST['pgto'];

    $sql = "INSERT INTO  `alunos` (aluno, curso, cidade, pgto) VALUES ('$aluno', '$curso', '$cidade', '$pgto')";
    $insert = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RO-Cursos Alunos-cadastro</title>
    <link rel="stylesheet" href="css/validacao.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
</head>
<body>
        <div class="alert alert-success" role="alert">
            <h1>Seu cadastro foi realizado com sucesso!</h1>
            <p><?php echo $aluno ?></p>
        </div>
    <a href="index.php">Voltar a Home</a>
</body>
</html>    