<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "Novhealth";
    $isConexion = false;

    try{
        $conexion = new mysqli($servidor, $usuario, $password, $db);
        $isConexion = true;
    }
    catch(Exception $e){
    ?>
        <script>
            setTimeout(() => {
                alert("No se pudo establecer una conexión con el servidor. \n" + "Intentelo mas tarde.");
            }, 500);
        </script>
    
    <?php
    }
?>