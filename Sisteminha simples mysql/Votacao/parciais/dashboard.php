<?php
session_start();
if(!isset($_SESSION['id'])){
  header('location:../');
}
$data=$_SESSION['data'];
if($_SESSION['status']==1){
    $status='<b class="text-primary">Votou</b>';
}else{
    $status='<b class="text-danger">Não votou</b>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Votação -Dashboard</title>

    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css file -->
    <link rel="stylesheet" href="../src/css/style.css">
</head>
<body class="bg-success text-light ">
    <div class="container my-5">
        <a href="../"><button class="btn btn-dark text-light px-3">Voltar</button></a>
        <a href="logout.php/"><button class="btn btn-dark text-light px-3">Logout</button></a>
        <h1 class="my-3">Sistema de Votação</h1>
        <div class="row my-5">
            <div class="col-md-7">
              <?php
              if(isset($_SESSION['chapas'])){
                $chapas=$_SESSION['chapas'];
                for($i=0;$i<count($chapas);$i++){
                  ?>

                <div class="row">
              <div class="col-md-4">
                
              </div>
              <div class="col-md-8">
                <strong class="text-dark h5">Nome da chapa:</strong>
                <?php echo $chapas[$i]['nomeusuario'] ?>
                <br>
                <strong class="text-dark h5">Votos:</strong>
                <?php echo $chapas[$i]['votos'] ?><br>
              </div>
                </div>
                <form action="../ações/votacao.php" method="post">
<input type="hidden" name="votoschapa" value="<?php echo $chapas[$i]['votos']?>">
<input type="hidden" name="idchapa" value="<?php echo $chapas[$i]['id']?>">


<?php
if($_SESSION['status']==1){
  ?>
  <button class="bg-primary my-3 text-white px-3">Votou</button>
  <?php
}else{
  ?>
  <button class="bg-danger my-3 text-white" type="submit">Votar</button>
  <?php
}

?>

                </form>
                <hr> 
                <?php
              }
            }else{
              ?>
              <div class="container">
                <p>Sem chapas a exibir</p>
              </div>
              <?php
            }

              
              ?>
              
                <!-- chapas -->
              
              
             </div>
            <div class="col-md-5">
                <!-- perfil de usuario-->
                
                <br>
                <br>
                <strong class="text-dark h5">Nome:</strong>
                <?php echo $data['nomeusuario'] ;?><br><br>
                <strong class="text-dark h5">Matrícula:</strong>
                <?php echo $data['matricula'] ;?><br><br>
                <strong class="text-dark h5">Status atual:</strong>
                <?php echo $status;?><br><br>
</div>

            </div>

    </div>
</body>
</html>