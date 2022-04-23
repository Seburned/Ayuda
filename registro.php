<!DOCTYPE html>
<html>
    <head>
        <title></title>
        
    </head>
    <body>
    <h1>Formulario de Registro</h1>
    <h3>Asegúrese de rellenar todos los campos</h3>
        <form method="POST">
            <table>
                <tr>
                    <td>Nombres y Apellidos:</td>
                    <th><input type="name" name="nombre"></th>
                </tr>
                <tr>
                    <td>Correo electrónico:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Contraseña:</td>
                    <th><input type="password" name="pass"></th>
                </tr>
                <tr>
                    <td>Repetir contraseña:</td>
                    <th><input type="password" name="rpass"></th>
                </tr>
                <tr>
                    <td>DNI:</td>
                    <th><input type="number" name="dni"></th>
                </tr>
            </table>
            <input type="submit" name="submit" value="Registrarme">
        </form>    
        <?php
            if (isset($_POST['submit'])){
                require ("validar.php");
                header("location:principal.php");
            }
                
        ?>
    </body>
</html>
