<?php
 // 1 Agregar, 2 Eliminar, 3 Actualizar
 $accion 	= $_GET['ac'];    
 if (isset($_POST['titulo']) && isset($_POST['fecha_lanzamiento']) && isset($_POST['genero']) && isset($_POST['duracion']) && isset($_POST['director']) && isset($_POST['reparto']) && isset($_POST['sinopsis']) && isset($_POST['imagen'])) 
 	{
 	$titulo 			= $_POST['titulo'];
	$fecha_lanzamiento 	= $_POST['fecha_lanzamiento'];
	$genero 			= $_POST['genero'];
	$duracion 			= $_POST['duracion'];
	$director 			= $_POST['director'];
	$reparto 			= $_POST['reparto'];
	$sinopsis 			= $_POST['sinopsis'];
	$imagen 			= $_POST['imagen'];
 	}

$conexion  	= mysqli_connect("localhost","root","","movies_cac");
switch ($accion) {
	case 1:
		$consulta = "INSERT INTO `peliculas` VALUES (NULL,'$titulo','$fecha_lanzamiento','$genero','$contenido','$duracion','$director','$reparto','$sinopsis','$imagen')";
		mysqli_query($conexion, $consulta);
		echo "Se Agrego La Nueva Pelicula<br>";
		break;
	case 2:   
		$id= $_POST['id'];
		$consulta = "UPDATE `peliculas` SET `titulo`='$titulo', `fecha_lanzamiento`='$fecha_lanzamiento', `genero`='$genero', `contenido`='$contenido', `duracion`='$duracion', `director`='$director', `reparto`='$reparto', `sinopsis`='$sinopsis', `imagen`='$imagen' WHERE id = $id";
		mysqli_query($conexion, $consulta);
		echo "Se Actualizo La Pelicula<br>";
		break;
	case 3:
		$id= $_GET['id'];
		$consulta = "DELETE from peliculas WHERE id = $id";
		mysqli_query($conexion, $consulta);
		echo "Se Elimino La Pelicula<br>";
		break;	
	default:
		echo "No Se Realizo Ninguna Accion";
	break;
}
?>
<a href="crud.php">Volver</a>