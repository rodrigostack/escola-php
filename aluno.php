<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RO-Cursos Alunos-cadastro</title>
    <link rel="stylesheet" href="css/aluno.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
</head>
<body>
    <div class="container">
        <div id="cabeçalho">
            <h1>Cadastre-se aqui</h1>
        </div>
        <form class="formaluno">
        <div class="row">
            <div class="col-md-6">
                <label class="form-label labelform">Nome Aluno:</label>
                <input type = "text" placeholder = "Digite o aluno" class="form-control" name="aluno">
            </div>
            <div class="col-md-6">
                <label class="form-label labelform">Curso:</label>
                <input type = "text" placeholder = "Digite o curso" class="form-control" name="curso">
            </div>
        </div>  
        <div class="row">
            <div class="col-md-6">
            <label class="form-label labelform">Cidade:</label>
                <input type = "text" placeholder = "Digite o Cidade" class="form-control" name="cidade">
            </div>
            <div class="col-md-6">
            <label class="form-label labelform">Forma de Pgto:</label>
                <select  class="form-control" name="pgto">
                    <option selected>.....</option>
                    <option value="dinheiro">Dinheiro</option>
                    <option value="debito">Débito</option>
                    <option value="credito">Crédito</option>
                    <option value ="cheque">Cheque</option>
                </select>
            </div>
            <div class="row" >
                <div class="col" id="btn">
                    <button type="submit" class="btn btn-primary" id="enviar">Enviar dados</button>
                </div>

            </div>
        </div> 
        </form>    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>    