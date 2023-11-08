<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Votação -Página de registro</title>
     <!-- Bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bg-success">
    <h1 class="text-center text-light p-3">Sistema de Votação</h1> 
    <div class="bg-warning py-4">
        <h2 class="text-center"> Registrar conta</h2>
        <div class="container text-center">
           <form action="../ações/registrar.php" method="POST"
           enctype="multipart/form-data">
            <div class="mb-3">
               <input type="text" class="form-control w-50 m-auto" placeholder="insira seu nome"
               required="required" name="nomeusuario"> 
            </div>
            <div class="mb-3">
               <input type="text" class="form-control w-50 m-auto" placeholder="insira sua matricula"
               required="required" name="matricula" maxLenght="10" minLength="10"> 
            </div>
            <div class="mb-3">
               <input type="password" class="form-control w-50 m-auto" placeholder="insira sua senha"
               required="required" name="senha"> 
            </div>
            <div class="mb-3">
               <input type="password" class="form-control w-50 m-auto" placeholder="confirme sua senha"
               required="required" name="csenha"> 
            </div>
            <div name="senha_diferentes" style="display: none;">
               <p>As senhas não coincidem</p>
            </div>
            <div name="padrao_senha" style="display: none;">
               <p>A senha deve conter pelo menos uma letra maiúscula, uma letra minúscula, um número e ter pelo menos 8 caracteres.</p>
            </div>
            <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                     <option value="chapa">Chapa</option>
                     <option value="eleitor">Eleitor</option>
                    </select>
                </div>
            <button type="submit" name="enviar" class="btn btn-dark my-4">Registrar</button>
            <p>Já tem uma conta? <a href="../" class="text-white">Logar aqui</a></p>
           </form> 
        </div>
    </div>
    <script>
      
        document.querySelector('input[name="senha"]').addEventListener('input', valida_senha);
        document.querySelector('input[name="csenha"]').addEventListener('input', valida_senha);

        function valida_senha(){
            
            let senha = document.querySelector('input[name="senha"]');
            let csenha = document.querySelector('input[name="csenha"]');
            let btnEnviar = document.querySelector('button[name="enviar"]');
            let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/; // essa função obriga que o usuario digite pelo menos uma letra maiuscula, menuscula e um numeral
            
            if (senha.value === csenha.value){
                console.log('entrou')
                document.querySelector('div[name="senha_diferentes"]').style.display = "none";
                if (!regex.test(this.value)){
                    document.querySelector('div[name="padrao_senha"]').style.display = "block";
                    btnEnviar.disabled = true;
                }
                else if (regex.test(this.value)){
                    document.querySelector('div[name="padrao_senha"]').style.display = "none";
                    btnEnviar.disabled = false;    
                }
            }
            else if (senha.value !== csenha.value){
                document.querySelector('div[name="senha_diferentes"]').style.display = "block";
                btnEnviar.disabled = true;
            }
        };
   </script>
    <script src="..\src\js\registro\registro.js"></script>
</body>
</html>