<?php
 
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $rpass = $_POST['rpass'];
    $dni = $_POST['dni'];
    
    $rq = strlen($nombre) * strlen($email) * strlen($pass) * strlen($rpass) * strlen($dni);
    if ($rq > 0){
        if ($pass === $rpass){
            require ("conect_db.php");
            mysqli_query($vinculo,"INSERT INTO usuarios VALUES('','$nombre','$email','$pass','$dni')");
            mysqli_close($vinculo);
            echo "Se ha registrado su cuenta exitosamente";
        } else {
            echo "Introduzca dos contraseñas idénticas";
        }

    } else {
        echo "Por favor, rellene todos los campos";        
}
?>

