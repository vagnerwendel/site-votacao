<?php
session_start();
include('conectar.php');

$votes=$_POST['votoschapa'];
$totalvotes=$votes+1;


$gid=$_POST['idchapa'];
$uid=$_SESSION['id'];

$updatevotes=mysqli_query($con,"update `usudados` set votos='$totalvotes'where id= '$gid'");

$updatestatus=mysqli_query($con,"update `usudados` set status=1 where
 id='$gid'");

 if($updatevotes and $updatestatus){
    $getchapas=mysqli_query($con,"Select nomeusuario,photo,votos,id from `usudados`
    where standard='chapa'");
    $chapas=mysqli_fetch_all($getchapas,MYSQLI_ASSOC);
    $_SESSION['chapas']=$chapas;
    $_SESSION['status']=1;
    echo '<script>
     alert("Voto Bem-Sucedido")
     window.location="../parciais/dashboard.php"; 
    </script>';

    
 }else{
    echo '<script>
     alert("Houve um erro na votação ! Tente novamente")
     window.location="../parciais/dashboard.php";
    
    </script>';
 }


 ?>