<?php
        if(isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['correo_o_celular']) && isset($_POST['contrasena'])
        && isset($_POST['dia_nacimiento']) && isset($_POST['mes_nacimiento']) && isset($_POST['ano_nacimiento'])
        && isset($_POST['sexo'])){
            $correo_o_celular = $_POST['correo_o_celular'];

            $query = "SELECT  correo_o_celular FROM datos_usuario WHERE correo_o_celular = '$correo_o_celular'";
            include('Conexion.php');

            if ($isConexion == true){
                $datos = $conexion->query($query);

                $datos = $datos->fetch_assoc();

                    if (empty($datos)){
                        $nombre = $_POST['nombre'];
                        $apellidos = $_POST['apellidos'];
                        $contrasena = $_POST['contrasena'];
                        $dia_nacimiento = $_POST['dia_nacimiento'];
                        $mes_nacimiento = $_POST['mes_nacimiento'];
                        $ano_nacimiento = $_POST['ano_nacimiento'];
                        $sexo = $_POST['sexo'];
            
                        $query = "INSERT INTO datos_usuario (id, nombre, apellidos, correo_o_celular, contrasena, dia_nacimiento,
                        mes_nacimiento, ano_nacimiento, sexo, foto) VALUES (NULL, '$nombre', '$apellidos', '$correo_o_celular', '$contrasena',
                        '$dia_nacimiento', '$mes_nacimiento', '$ano_nacimiento', '$sexo', 'Foto')";
            
                        include('Conexion.php');
            
                        if ($isConexion == true){
                            $conexion->query($query); ?>
            
                            <script>
                                setTimeout(() => {
                                    alert("Felicidades, ahora tienes una cuenta. \n" + "Inicia sesión para ver tu perfil.");
                                }, 500);
                            </script>
                        <?php }
                    }

                    else{ ?>
                        <script>
                            setTimeout(() => {
                                alert("Lo sentimos, ese correo ya está en uso. \n" + "Intente de nuevo con un correo diferente.");
                            }, 500);
                        </script>
                    <?php }
                }
            }
    ?>