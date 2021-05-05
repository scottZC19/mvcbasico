<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Desarrollo de SW II</title>
        
        <meta charset="utf-8" />
        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	</head>
    <header>
    <div class="well well-sm text-left">
    <a class="btn btn-success" href="?c=Alumno">Alumno</a>
    <a class="btn btn-success" href="?c=Curso">Cursos</a>
    <a class="btn btn-success" href="?c=AlumnoCurso">Alumno por Curso</a>
    </div>

    <div class="well well-sm text-left">
        <?php
        session_start();
	    echo "Sesion Iniciada de  " . $_SESSION['usuario'];
        ?>
    </div>
    
    </header>
    <body>
        
    <div class="container">