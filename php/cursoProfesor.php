
<?php
session_start();
 $usuario = $_SESSION['usuario'];
 if(!isset($usuario)){
   header("location: ../iniciarSesion.php");
 }
?>
<?php
 error_reporting(E_ALL^E_NOTICE^E_WARNING);
$curso=$_POST["seleccionar"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Mentes Informaticas">
    <link rel="icon" href="../imagenes/logos/logo.png">
    <link rel="stylesheet" href="../css/sistema.css">
    <title>Profesor/Curso</title>
  </head>
  <body>
    <header>
      <figure class="logo-sistema">
          <img src="../imagenes/login-fondo.jpg" alt="Fondo Header" id="imagen-fondo-header">
      </figure>
      <nav class="menu-all">
          <ul class="lista-padre-menu">
            <li class="lista-menu"><a href="profesorInicio.php">Inicio</a></li>
            <li class="lista-menu"><a href="materiasProfesor.php">Materia</a></li>
            <li class="lista-menu"><a href="profesorNota.php">Calificaciones</a></li>
            <li class="lista-menu navegacion-curso"><a href="#">Curso</a></li>
            <li class="lista-menu"><a href="cerrarSesion.php">Cerrar Sesion</a></li>
          </ul>
      </nav>
    </header>
    <main>
      <?php
        include("../conexionbd/conectar.php");


          $consulta = "SELECT DISTINCT e.nombre,e.numlista,c.nombre_curso,a.id_asistencia,lunes,martes,miercoles,jueves,viernes FROM asistencia a INNER JOIN estudiante e ON a.id_estudiante = e.id_estudiante INNER JOIN curso c ON a.id_curso = c.id_curso WHERE a.id_curso='$curso' ORDER BY e.numlista" ;
          $resultado_curso = mysqli_query($conexionbd, $consulta);

      ?>

      <h3 class="titulo-asistencia">Asistencia</h3>
      <form action="cursoProfesor.php" method="POST">
          <select name="seleccionar" id="seleccionar">
              <option ><---seleccione un curso---></option>
              <option value="1">primero</option>
              <option value="2">segundo</option>
              <option value="3">Tercero</option>
              <option value="4">cuarto</option>
              <option value="5">quinto</option>
              <option value="6">sexto</option>

          </select>
             <input type="submit" value="enviar">
      </form>

        <table class="tabla-asistencia">
            <tr class="tabla-asistencia-titulo">
              <th class="constante-asistencia">Lista</th>
              <th class="constante-asistencia">Estudiante</th>
              <th class="constante-asistencia">Lunes</th>
              <th class="constante-asistencia">Martes</th>
              <th class="constante-asistencia">Miercoles</th>
              <th class="constante-asistencia">Jueves</th>
              <th class="constante-asistencia">Viernes</th>
              <th class="constante-asistencia">Curso</th>
              <th></th>
          </tr>

        <?php while($mostrar=mysqli_fetch_assoc($resultado_curso)){?>

              <tr class="campos-tabla-asistencia">
                  <th><?php echo $mostrar['numlista'];?></th>
                  <th><?php echo $mostrar['nombre'];?></th>
                  <th class="campos-asistencias"><?php echo $mostrar['lunes'];?></th>
                  <th class="campos-asistencias"><?php echo $mostrar['martes'];?></th>
                  <th class="campos-asistencias"><?php echo $mostrar['miercoles'];?></th>
                  <th class="campos-asistencias"><?php echo $mostrar['jueves'];?></th>
                  <th class="campos-asistencias"><?php echo $mostrar['viernes'];?></th>
                  <th class="campos-asistencias"><?php echo $mostrar['nombre_curso'];?></th>

                  <th><a href="editarCursoProfesor.php?id=<?php echo $mostrar['id_asistencia'];?>">Editar</a></th>
              </tr>
        <?php }?>

          </table>
          <div class="mini-explicacion">
              <p>P = <span>Presente</span></p>
              <p>A = <span>Ausente</span></p>
              <p>T = <span>Tardanza</span></p>
          </div>
        </main>
        <footer>
            <p>&copy;Todos los Derechos Reservados - Mentes Informaticas 2022</p>
        </footer>
</body>
</html>
