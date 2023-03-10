<?php
    if (isset($_POST['usuario']) && isset($_POST['main-contrasena'])){
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['main-contrasena'];

        $query = "SELECT * FROM datos_usuario WHERE correo_o_celular = '$usuario' AND contrasena = '$contrasena'";

        include('Conexion.php');

        if ($isConexion == true){
            $datos = $conexion->query($query);

            $datos = $datos->fetch_assoc();
    
            if (empty($datos)){ ?>
                <script>
                    setTimeout(() => {
                        alert("Usuario o contraseña incorrectos. \n" + "Intente de nuevo.");
                    }, 500);
                </script>
            <?php }
    
            else{ 
                header('Location: Main.php');
            }

        }

    }
?>