<?php include ('menu.php'); ?>
        <div class="Contenedor_principal" >
        <div class="titulo_contactos">
            <h1>Recuperar contraseña</h1>
        </div>
                <div class="cuerpo_recuperar_contraseña">
                    <form action="recuperar_contraseña.php" method="post">
                        <div class="imglogin" >
                            <img src="img/claverec.png"><br><br><br>
                        </div>
                            <label for="documento">Numero de documento: </label>  <!-- Para identidificar que tipo de datos va a colocar el input -->
                            <input type="text" id="documento" name="documento" placeholder="documento" required><br><br>
                            <label for="password">Email</label> 
                            <input type="email" id="correo" name="correo" placeholder="Ingrese correo" required><br><br>
                            <input class="boton_recuperar_contraseña" type="submit" id="Enviar" name="enviar" value="Enviar">    
                            </div><br>
                        </form>
    
                </div>

<?php include('pie_de_pagina.php'); ?>