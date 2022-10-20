<?php 
    include('../../conecta.php');
    $id_usuari = $_REQUEST['id'];
	//borrar usuario 

/* 	$consulta = "DELETE FROM usuarios where documento ='$id_usuari'"; */

    $sql="UPDATE usuarios set estado = 'Inactivo'  WHERE documento =$id_usuari";

	/* $conn->query($consulta); */
    $query=mysqli_query($conn,$sql);

	if(mysqli_connect_errno() !=0)
	{
		echo "error" . mysqli_connect_errno() . "-" . mysqli_connect_error();
		
	}else{
		header("location:usuarios.php");
	}
    if(empty($_REQUEST['id']))
    {
        header("location : usuarios.php");
    }else{

        $documento = $_REQUEST['id'];

        $query = mysqli_query($conn, "SELECT nombre, apellido, usuario, contraseña, correo, num_celular, direccion, tipo_usuario from usuarios where documento = $documento");
        $result = mysqli_num_rows($query);
        if($result > 0){
            while($data = mysqli_fetch_array($query)){
                $nombre = $data['nombre'];
                $apellido = $data['apellido'];
                $usuario = $data['usuario'];
                $contraseña = $data['contraseña'];
                $correo = $data['correo'];
                $num_celular = $data['num_celular'];
                $direccion = $data['direccion'];
            }
        }else{
            header("location: usuarios.php");
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <form action="post" action="delete.php"> 
        <div>
                <h2>Desea eliminar este usuario</h2>
                <p id="p">Nombre: <span><?php echo $nombre; ?></span></p>
                <p>apellido: <span><?php echo $apellido; ?></span></p>
                <p>usuario: <span><?php echo $usuario; ?></span></p>
                <p>contraseña: <span><?php echo $contraseña; ?></span></p>
                <p>correo: <span><?php echo $correo; ?></span></p>
                <p>numero de celular: <span><?php echo $num_celular; ?></span></p>
                <p>direccion: <span><?php echo $direccion; ?></span></p>
                </div>
                <div class="btn__group">
                <input type="hidden" name="documento" value="<?php echo $documento; ?>">
                <a href="usuarios.php" class="btn btn__danger">Cancelar</a>
                
            </div>
        </form>
    </div>
</body>
</html>