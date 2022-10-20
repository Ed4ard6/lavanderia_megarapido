<?php include ('menu.php'); ?>
<?php include('pie_de_pagina.php'); ?>
    <!--Fin de codigo de menu-->
    <div class="contenedor_recuperar">
        <h1>Recuperar contraseña</h1>
        <form action="cambiar_contraseña.php" method="post">
            <div class="grupo">
                <label for="documento">Documento: </label>
                <input type="number" name="documento" id="documento" placeholder="Ingresar documento">
            </div>
            <div class="grupo">
                <label for="nueva_contraseña">Contraseña nueva: </label>
                <input type="number" name="nueva_contraseña" id="nueva_contraseña" placeholder="Ingresar nueva contraseña">
            </div>
            <div class="grupo">
                <label for="confiram_contraseña">Confirmar contraseña:</label>
                <input type="text" name="confiram_contraseña" id="confiram_contraseña" placeholder="Ingresar contraseña">
            </div>
            <div class="boton-recuperar">
                <input type="submit" value="Enviar" name="enviar">
            </div>
        </form>
    </div>

<?php include('pie_de_pagina.php'); ?>