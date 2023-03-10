<DOCTYPE html>
    <html lang="es"> 
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>NovHealth - Inicia sesión o regístrate</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="Css/Bienvenida.css"> 
            <link rel="stylesheet" type="text/css" href="Css/Home.css">
        </head>

        <body>
            <div class="columnas">
                    
                <div class="columna-izquierda">
                    <section id="hero">
                        <div class="hero container">
                        <div>
                            <h1>El mejor servicio<span></span></h1>
                            <h1>medico con<span></span></h1>
                            <h1>NOVHEALT<span></span></h1>
                        </div>
                        </div>
                    </section>
                </div>

                <div class="columna-derecha">
                    <div class="formulario">
                        <form action="Home.php" method="post">
                            <input class="main-inputs" name="usuario" type="text" placeholder="Correo electrónico o número de teléfono" required>
                            <br />

                            <input id="main-contrasena" name="main-contrasena" class="main-inputs" type="password" placeholder="Contraseña" required>
                            <br />

                            <input id="iniciar-sesion" type="submit" value="Iniciar sesión">
                            <br />

                        </form>

                        <?php include('iniciarSesion.php'); ?>

                            <a href="#pop-up-contraseña"><p id="restaurar-contrasena">¿Olvidaste tu contraseña?</p></a>

                            <button id="nueva-cuenta" onclick="location.href='#pop-up'">Crear nueva cuenta</button>
                    </div>
                </div>

                <div id="pop-up" class="pop-up-class">
                    <div class="formulario-registro">
                        <a href="#cerrar" class="cerrar">X</a>

                        <h1>Registrarte</h1>
                        <h6>Es rápido y fácil</h6>

                        <form action="Home.php" method="post">
                            <input name="nombre" class="registro-input" placeholder="Nombre" type="text" required>
                            <input id="separacion-de-inputs" name="apellidos" class="registro-input" placeholder="Apellido" type="text" required>

                            <input name="correo_o_celular" class="registro-input-largo" placeholder="Número de celular o correo electrónico" type="text" required>
                            <br />

                            <input name="contrasena" class="registro-input-largo" placeholder="Contraseña nueva" type="password" required>
                            <br />

                            <h6 class="sexo-y-fecha">Fecha de nacimiento</h6>
                            <select name="dia_nacimiento" class="registro-input-corto">                                
                                <?php for ($i = 1; $i <= 30; $i++ ){                                   
                                    if ($i != 5){ ?>                                        
                                        <option><?php echo $i ?></option>                                        

                                    <?php }
                                    else{ ?>                                        
                                        <option selected><?php echo $i ?></option>
                                    <?php }                                    
                                } ?>                                
                            </select>

                            <select id="separacion-corta" name="mes_nacimiento" class="registro-input-corto">
                                <option>ene</option>
                                <option>feb</option>
                                <option selected>mar</option>
                                <option>abr</option>
                                <option>may</option>
                                <option>jun</option>
                                <option>jul</option>
                                <option>ago</option>
                                <option>sep</option>
                                <option>oct</option>
                                <option>nov</option>
                                <option>dic</option>
                            </select>

                            <select id="separacion-corta" name="ano_nacimiento" class="registro-input-corto">                                
                                <?php for ($i = 1905; $i <= 2022; $i++ ){                                                                         
                                    if ($i != 2022){ ?>   
                                        <option><?php echo $i ?></option>                                                                                                                                                         
                                    <?php } 
                                    else{ ?>                                        
                                        <option selected><?php echo $i ?></option>
                                        
                                    <?php }                                     
                                } ?>                                
                            </select>

                            <h6 class="sexo-y-fecha">Sexo</h6>
                                <div class="radio-container">
                                    <label for="mujer">Mujer</label>
                                    <input id="mujer" class="radio-buttons" name="sexo" type="radio" value="Mujer" checked>
                                </div>   
                                
                                <div class="radio-container" id="radio-margin">
                                    <label for="hombre">Hombre</label>
                                    <input id="hombre" class="radio-buttons" name="sexo" type="radio" value="Hombre">
                                </div> 

                                <div class="radio-container" id="radio-margin">
                                    <label for="otro">Otro</label>
                                    <input id="otro" class="radio-buttons" name="sexo" type="radio" value="Otro">
                                </div> 

                            <br />

                            <input id="enviar-registro" type="submit" value="Registrarte">
                        </form>            
                    </div>
                </div>

                <?php
                include('RegistrarUsuario.php');
                ?>

                <div id="pop-up-contraseña" class="pop-up-class">
                    <div class="formulario-registro">
                        <a href="#cerrar" class="cerrar">X</a>

                        <form action="Home.php" method="post">
                            <h1 id="contrasena-titulo">¿Se te olvidó tu contraseña?</h1>

                            <p id="instrucciones-contrasena"><b>¡No te preocupes!</b> Solo llena el siguiente
                                 formulario, si el correo que nos proporciones es valido, cambiaremos
                                tu contraseña de inmediato.
                            </p>
                            <input class="contrasena-input" name="correo" type="text" placeholder="Correo electrónico" required>
                            <input class="contrasena-input" name="contrasena-pop-up" type="password" placeholder="Nueva contraseña" required>

                            <button id="confirmar-button" type="submit">Confirmar</button>
                        </form>

                        <?php
                            include('Contrasena.php');
                        ?>

                        <p id="mostrar-mensaje">
                            Si quieres que el cambió de contraseña sea un exito, en ese caso 
                            debes asegurarte de escribir tu correo correctamente; respetando minusculas,
                            mayusculas, numeros, etc.
                        </p>
                    </div>
                </div>
        </body>
    </html>