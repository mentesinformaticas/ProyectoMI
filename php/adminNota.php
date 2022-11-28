
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
    <title>Admin/Calificaciones</title>
  </head>
  <body>
    <?php

       $estudiante = $_GET["id"];
    ?>
    <main>
      <div class="encabezados-notas">
        <p>Calificaciones</p>
      </div>

        <table class="tablas-notas">
          <?php
          include("../conexionbd/conectar.php");


         $consulta_calificaciones="SELECT id_calificaciones,materia,notas_uno,notas_dos,notas_tres,notas_cuatro FROM calificaciones c INNER JOIN estudiante e INNER JOIN asignatura a ON  c.id_estudiante = e.id_estudiante AND c.id_asignatura = a.id_asignatura WHERE e.id_estudiante = '$estudiante' ";
         $conectar = mysqli_query($conexionbd, $consulta_calificaciones);

         $consulta_nombre= "SELECT nombre,apellido FROM calificaciones c INNER JOIN estudiante e INNER JOIN asignatura a ON  c.id_estudiante = e.id_estudiante AND c.id_asignatura = a.id_asignatura WHERE e.id_estudiante = '$estudiante'";
         $conectarNombre=mysqli_query($conexionbd,$consulta_nombre);

         $nombre=mysqli_fetch_assoc($conectarNombre);
          ?>
            <tr class="parciales">
                <th id="nombreEstudiante-notas"><?php echo $nombre["nombre"]; ?> <?php echo $nombre["apellido"]; ?></</th>
                <th>P1</th>
                <th>P2</th>
                <th>P3</th>
                <th>P4</th>
                <th>Nota Final</th>
                <th>Estado</th>
                <th></th>
            <tr>
              <?php while( $mostrar=mysqli_fetch_assoc($conectar)){?>

                <th class="materia-notas"><?php echo $mostrar["materia"];?></th>
                <th><?php echo $mostrar["notas_uno"];?></</th>
                <th><?php echo $mostrar["notas_dos"];?></</th>
                <th><?php echo $mostrar["notas_tres"];?></</th>
                <th><?php echo $mostrar["notas_cuatro"];?></</th>

                <?php $notaUno=$mostrar["notas_uno"];
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
                <th><?php echo  ceil($promedio);?></th>
                <th><?php echo $aprobado;?></th>
                <th><a href="editarNotas.php?materia=<?php echo $mostrar['id_calificaciones']?>&id=<?php echo $estudiante?>">Editar</a></th>
            </tr>
          <?php }?>
        </table>

        </table>
        <div class="formulario-notas">
        <a href="estudiante.php?curso=<?php echo $estudiante?>">Regresar</a>
        <p class="texto-formulario-notas">Si las calificaciones no aparecen precione <a href="agregarNotas.php?id=<?php echo $estudiante?>" id="enlace-notas">Aqui</a></p>
        </div>
    </main>
    <footer>
        <p>&copy;Todos los Derechos Reservados - Mentes Informaticas 2022</p>
    </footer>
  </body>
</html>
