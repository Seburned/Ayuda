<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title></title>
    </head>
    <body>
        <h1>Bienvenido!</h1>
        <h3>Ingrese las credenciales de su cuenta</h3>
        <form action="validarlogin.php" method="POST">
            <table>
                <tr>
                    <td>Correo electrónico:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Contraseña:</td>
                    <th><input type="password" name="pass"></th>
                </tr>
            </table>
            <input type="submit" value="Ingresar">
            <p></p>
            No tiene cuenta?
            <p></p>
        <a href="http://localhost/Trabajo_Final/registro.php">Registrarme</a>
        </form>
        <?php
        
        ?>
    </body>
</html>
