<?php

    $email=$_POST['email'];
    $pass=$_POST['pass'];
    session_start();
    $_SESSION['email']=$email;

include ('conect_db.php');
$consulta="SELECT*FROM usuarios where email='$email' and pass='$pass'";

$resultado=mysqli_query($vinculo, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    header("location:principal.php");
}else{
    ?>
    <?php
    include("index.php");
    echo 'Error en la autentificación de su cuenta, revise sus credenciales o registre una cuenta nueva';
    
}
    mysqli_free_result($resultado);
    mysqli_close($vinculo);
