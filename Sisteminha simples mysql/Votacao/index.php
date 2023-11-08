<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação Turma</title>

    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-success">
    <h1 class="text-light text-center p-3">Sistema de Votação</H1> 
    <div class="bg-warning py-4">
        <h2 class="text-center">Login</h2>
        <div class="container text-center">
            <form action="./ações/login.php" method="POST">

                <div class="mb-3">
                    <input type="text"class="form-control w-50 m-auto"
                     name="nomeusuario" placeholder="Digite seu nome" 
                     required="required">
                </div>
                <div class="mb-3">
                    <input type="text"class="form-control w-50 m-auto"
                     name="matricula" placeholder="Digite sua matricula" 
                     required="required" maxLenght="10" minLength="10">
                </div>
                <div class="mb-3">
                    <input type="password"class="form-control w-50 m-auto"
                     name="senha" placeholder="Digite sua senha" 
                     required="required">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="chapa">Chapa</option>
                        <option value="eleitor">Eleitor</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Login</button>
                <p>Ainda não se registrou? <a href="./parciais/registro.php" class="text-white"> Registre-se aqui</a></p>
                
            </form>
        </div>
    </div>
    <script src=".\src\js\login\login.js"></script>

</body>

</html>