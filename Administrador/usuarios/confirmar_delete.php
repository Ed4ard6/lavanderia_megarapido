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
        echo ' 
            <script>
            window.location = "usuarios.php";
            </script>
            ';
	}
    if(empty($_REQUEST['id']))
    {
        echo ' 
            <script>
            window.location = "usuarios.php";
            </script>
            ';
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
            echo ' 
            <script>
            window.location = "usuarios.php";
            </script>
            ';
        }

    }
}
?>
