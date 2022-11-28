
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
    <title>Profesor/Materia</title>
  </head>
  <body>
    <header>
      <figure class="logo-sistema">
          <img src="../imagenes/login-fondo.jpg" alt="Fondo Header" id="imagen-fondo-header"> 
      </figure>
      <nav class="menu-all">
          <ul class="lista-padre-menu">
            <li class="lista-menu"><a href="profesorInicio.php">Inicio</a></li>
            <li class="lista-menu materia-navegacion"><a href="#">Materia</a></li>
            <li class="lista-menu"><a href="profesorNota.php">Calificaciones</a></li>
            <li class="lista-menu"><a href="cursoProfesor.php">Curso</a></li>
            <li class="lista-menu"><a href="cerrarSesion.php">Cerrar Sesion</a></li>
          </ul>
      </nav>
    </header>
    <main>
      <?php
      include("../conexionbd/conectar.php");
        $consulta = "SELECT DISTINCT  id_horario,horario,Lunes,Martes,Miercoles,Jueves,Viernes FROM horario h INNER JOIN profesor p ON h.id_curso= p.id_curso
      WHERE  h.id_curso =  '$curso'";

      $resultado=mysqli_query($conexionbd, $consulta);

      ?>
      <div class="main-all">
        <h3 class="materia">Materias</h3>
        <form action="materiasProfesor.php" method="POST">
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
        <table id="table">
          <tr class="dias-semana">
            <td>Hora</td>
            <td>Lunes</td>
            <td>Martes</td>
            <td>Miercoles</td>
            <td>Jueves</td>
            <td>Viernes</td>
          </tr>
        <?php while($mostrar=mysqli_fetch_assoc($resultado)){?>
            <tr class="tr">

              <th><?php echo $mostrar['horario']?></th>
              <th><?php echo $mostrar['Lunes']?></th>
              <th><?php echo $mostrar['Martes']?></th>
              <th><?php echo $mostrar['Miercoles']?></th>
              <th><?php echo $mostrar['Jueves']?></th>
              <th><?php echo $mostrar['Viernes']?></th>
            </tr>
<?php }?>
        </table>

      </div>
    </main>
    <footer>
        <p>&copy;Todos los Derechos Reservados - Mentes Informaticas 2022</p>
    </footer>
  </body>
</html>
