<?php
session_start();
include('conectar.php');

$usuario=$_POST['nomeusuario'];
$matricula=$_POST['matricula'];
$senha=$_POST['senha'];
$std=$_POST['std'];

$sql="Select * from `usudados` where nomeusuario='$usuario' and matricula='$matricula' and senha='$senha' and standard='$std'";

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    $sql="select nomeusuario,photo,votos,id from `usudados` where standard='chapa'";
    $resultchapa=mysqli_query($con,$sql);
    if(mysqli_num_rows($resultchapa)>0){
        $chapas=mysqli_fetch_all($resultchapa,MYSQLI_ASSOC);
        $_SESSION['chapas']=$chapas;

    }
    $data=mysqli_fetch_array($result);
    $_SESSION['id']=$data['id'];
    $_SESSION['status']=$data['status'];
    $_SESSION['data']=$data;

    echo '<script>
     window.location="../parciais/dashboard.php";
    </script>';   

}else{
    echo '<script>
    alert("Credenciais invalidas");
     window.location="../";
    </script>';
}


?>
