<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RO-Cursos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light navbarback">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">R.O Cursos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item  itens">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Cursos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Quem somos?</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Cadastros
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="aluno.php">Novo aluno</a></li>
                    <li><a class="dropdown-item" href="#">Novo funcion??rios</a></li>
                    <li><a class="dropdown-item" href="#">Novo curso</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Consultas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="aluno.php">Alunos</a></li>
                    <li><a class="dropdown-item" href="#">Funcion??rios</a></li>
                    <li><a class="dropdown-item" href="#">Cursos</a></li>
                </ul>
                </li>
            </ul>
          
            </div>
        </div>
        </nav>

        <main class="principal">
            <div class="container">
            <table class="table  table-hover tableback">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Alunos</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Pgto</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            require 'conection.php';
                            $sql = "SELECT * FROM `alunos`";
                            $busca = mysqli_query($conn, $sql);

                            while ($array = mysqli_fetch_array($busca)) {
                                $id = $array['id'];
                                $aluno = $array['aluno'];
                                $curso = $array['curso'];
                                $cidade = $array['cidade'];
                                $pgto = $array['pgto'];
                       ?>

                        <td><?php echo $id ?></td>
                        <td><?php echo $aluno ?></td>
                        <td><?php echo $curso ?></td>
                        <td><?php echo $cidade ?></td>
                        <td><?php echo $pgto ?></td>
                        <td><a href="#"><h5><i class="fa-solid fa-pen-to-square"></i></h5></a></td>
                        <td><a href="#"><h5><i class="fas fa-trash-alt"></i></h5></a></td>
                                   
                    </tr>
                    <?php  }    ?>
                    
                   
                
                </tbody>
             </table>
            </div>

        </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>