
<?php
session_start();
 $usuario = $_SESSION['usuario'];
 if(!isset($usuario)){
   header("location: ../iniciarSesion.php");
 }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Mentes Informaticas">
    <link rel="icon" href="../imagenes/logos/logo.png">
    <link rel="stylesheet" href="../css/sistema.css">
    <title>Estudiante/Calificaciones</title>
  </head>
  <body>
    <?php
    include("../conexionbd/conectar.php");
    $consulta ="SELECT materia, notas_uno, notas_dos, notas_tres, notas_cuatro FROM calificaciones c INNER JOIN asignatura a ON c.id_asignatura = a.id_asignatura INNER JOIN estudiante e ON c.id_estudiante = e.id_estudiante WHERE e.usuario_estudiante='$usuario' ORDER BY c.id_asignatura";
    $consultaNombre="SELECT nombre,apellido FROM estudiante WHERE usuario_estudiante='$usuario'";
    $resultadoNombre= mysqli_query($conexionbd,$consultaNombre);
    $resultado = mysqli_query($conexionbd,$consulta);
    $mostrarNombre=mysqli_fetch_assoc($resultadoNombre);

    ?>
    <header>
      <figure class="logo-sistema">
          <img src="../imagenes/login-fondo.jpg" alt="Fondo Header" id="imagen-fondo-header">
      </figure>
      <nav class="menu-all">
          <ul class="lista-padre-menu">
              <li class="lista-menu"><a href="estudianteInicio.php">Inicio</a></li>
              <li class="lista-menu"><a href="materiasEstudiante.php">Materia</a></li>
              <li class="lista-menu navegacion-calificaciones"><a href="#">Calificaciones</a></li>
              <li class="lista-menu"><a href="cerrarSesion.php">Cerrar Sesion</a></li>
          </ul>
      </nav>
    </header>
    <main>
      <div class="encabezados-notas">
        <p>Calificaciones</p>
      </div>
      <table class="tablas-notas">
          <tr class="parciales">
              <th id="nombreEstudiante-notas"><?php echo $mostrarNombre['nombre'].' '.$mostrarNombre['apellido']?></th>
              <th>P1</th>
              <th>P2</th>
              <th>P3</th>
              <th>P4</th>
              <th>promedio</th>
              <th></th>
          </tr>
   <?php while($mostrar=mysqli_fetch_assoc($resultado)){?>
          <tr>
              <th class="materia-notas"><?php echo $mostrar['materia']; ?></th>
              <th><?php echo $mostrar['notas_uno']; ?></th>
              <th><?php echo $mostrar['notas_dos']; ?></th>
              <th><?php echo $mostrar['notas_tres']; ?></th>
              <th><?php echo $mostrar['notas_cuatro']; ?></th>

              <?php
                    $notaUno=$mostrar["notas_uno"];
                    $notaDos=$mostrar["notas_dos"];
                    $notaTres=$mostrar["notas_tres"];
                    $notaCuatro=$mostrar["notas_cuatro"];

                  $promedio=(($notaUno+$notaDos+$notaTres+$notaCuatro)/4);



                  if($promedio>=70){
                     $aprobado="Aprobado";
                   }
                     else{
                          $aprobado="Reprobado";
                     }

              ?>
              <th><?php echo ceil($promedio);?></th>
              <th><?php echo $aprobado?></th>


          </tr>
<?php }?>
      </table>
    </main>
    <footer>
        <p>&copy;Todos los Derechos Reservados - Mentes Informaticas 2022</p>
    </footer>
  </body>
</html>
