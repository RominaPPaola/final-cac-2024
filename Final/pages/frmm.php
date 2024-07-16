<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CAC-MOVIES</title>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <script src="https://kit.fontawesome.com/f7fb471b65.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>


<body>
    <!-- header -->
    <header class="header">
        <nav class="navegacion">
            <a class="anclaLogo" href="#">
                <i class="fas fa-film" aria-hidden="true"></i>
                <span>CAC-Movies</span>
            </a>
            <h1 >Actualizacion de Peliculas</h1>
            <ul class="listaNav">
                <li class="listaItem"><a class="linkNav" href="#tendencias">Tendencias</a></li>
                <li class="listaItem"><a class="linkNav" href="./pages/registrarse.html">Registrarse</a></li>
                <li class="listaItem"><a class="linkNav iniciarSesion" href="./pages/iniciosesion.html">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <main id="main" class="main">
    <section class="sectionFormulario" data-aos="zoom-in"  data-aos-duration="1000">         
        <br>
        <!-- Formulario -->
		
		<?php
		$id= $_GET ['id'];
		$conexion 	= mysqli_connect("localhost","root","","movies_cac");
		$registros 	= mysqli_query($conexion, "Select * from peliculas where id=$id");
		$reg= mysqli_fetch_array ($registros);
		?>
        <form id="itemForm" class="mb-4" method="POST" action="accion.php?ac=2">
            <div class="row">
                <div class="col">
                    <input type="hidden" id="id" name="<?php echo $id;?>">

                    <div class="form-group">
                        <label for="name">Titulo:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value = "<?php echo $reg['titulo'];?>" required >
                    </div>

                    <div class="form-group">
                        <label for="description">Fecha Lan:</label>
                        <input type="date" class="form-control" id="fecha_lanzamiento" name="fecha_lanzamiento" value = "<?php echo $reg['fecha_lanzamiento'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Genero:</label>
                        <input type="text" class="form-control" id="genero" name="genero" value = "<?php echo $reg['genero'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Duracion:</label>
                        <input type="text" class="form-control" id="duracion" name="duracion" value = "<?php echo $reg['duracion'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Director:</label>
                        <input type="text" class="form-control" id="director" name="director" value = "<?php echo $reg['director'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Reparto:</label>
                        <input type="text" class="form-control" id="reparto" name="reparto" value = "<?php echo $reg['reparto'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Sinopsis:</label>
                        <input type="text" class="form-control" id="sinopsis" name="sinopsis" value = "<?php echo $reg['sinopsis'];?>" required>
                    </div>
                </div>

                <div class="col" >
                    <div class="form-group">
                        <label for="name">Imagen:</label>
                        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                    </div>                   
                </div>
            </div>          

            
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </section>
        </form>

        

    </main>

    <!-- footer -->
    <footer class="footer">
        <nav class="navegacion">
            <ul class="listaNav">
                <li class="listaItem"><a class="linkNav" href="">Términos y condiciones</a></li>
                <li class="listaItem"><a class="linkNav" href="">Preguntas frecuentes</a></li>
                <li class="listaItem"><a class="linkNav" href="">Ayuda</a></li>
                <li class="listaItem"><a class="linkNav administradorPeliculas" href="/index.html">Inicio</a></li>
            </ul>
        </nav>
        <a href="#main" class="flechaArriba">
            <img src="./assets/img/flecha-hacia-arriba.png" alt="ir arriba flecha">
        </a>
    </footer>
    <!-- Bootstrap JS y app.js -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>