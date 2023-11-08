<?php
include('conectar.php');

$usuario=$_POST['nomeusuario'];
$matricula=$_POST['matricula'];
$senha=$_POST['senha'];
$csenha=$_POST['csenha'];
$image=$_FILES['photo']['tmp_name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];



if($senha!=$csenha){
    echo '<script>
    alert("As senhas não combinaram");
    window.location="../parciais/registro.php";
    </script>';

}

else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $sql="insert into `usudados` (nomeusuario,matricula,senha,photo,standard,
    status,votos) values ('$usuario','$matricula','$senha','$image','$std',0,0)";

    $result=mysqli_query($con,$sql);
    
    if($result){
        echo '<script>
        alert("registrado com sucesso");
        window.location="../";
        </script>';
    }else{
        die(mysqli_error($con));
    }
    
}

?>