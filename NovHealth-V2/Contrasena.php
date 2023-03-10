<?php
    if (isset($_POST['correo']) && isset($_POST['contrasena-pop-up'])){
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena-pop-up'];

        $query = "SELECT correo_o_celular FROM datos_usuario WHERE correo_o_celular = '$correo'";

        include('Conexion.php');

        if ($isConexion == true){
            $datos = $conexion->query($query);
            $datos = $datos->fetch_assoc();

            if (empty($datos)){ ?>
                <script>
                    setTimeout(() => {
                        alert("Hubo un problama al actualizar tu contraseña.\n" + "Intentalo de nuevo.");
                    }, 500);              
                </script>
            <?php }

            else{
                $query = "UPDATE datos_usuario SET contrasena = '$contrasena' WHERE correo_o_celular = '$correo'";
                $conexion->query($query); ?>

                <script>
                    setTimeout(() => {
                        alert("¡El cambió de contraseña fue un exito!");
                    }, 500);
                </script>
            <?php }
        }
    }
?>