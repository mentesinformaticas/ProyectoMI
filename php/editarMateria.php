<?php
session_start();
 $usuario = $_SESSION['usuario'];
 if(!isset($usuario)){
   header("location: ../iniciarSesion.php");
 }
?>
<?php

$id_horario=$_GET['id'];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Mentes Informaticas">
    <link rel="icon" href="../imagenes/logos/logo.png">
    <link rel="stylesheet" href="../css/sistema.css">
    <title>Admin/Profesores/Agregar Usuario</title>
  </head>

  <?php
  include("../conexionbd/conectar.php");
  $consulta = "SELECT DISTINCT  id_horario,horario,Lunes,Martes,Miercoles,Jueves,Viernes FROM horario h INNER JOIN profesor p ON h.id_curso= p.id_curso
  WHERE  h.id_horario =  '$id_horario'";

  $resultado=mysqli_query($conexionbd, $consulta);
  $mostrar=mysqli_fetch_assoc($resultado);



  ?>
  <body>

    <form class="agregarUsuario" action="procesarActualizarHorario.php" method="POST">
      <div class="agregarUsuario-titulo">
          <h3>Editar Materia</h3>
      </div>
      <div class="agregarUsuario-grupo">

      <input type="hidden" name="id_horario" value="<?php echo $mostrar['id_horario']?>">

      <p class="titulo-editar-materia-izquierdo">Hora</p>
      <input type="teeditar-materia-horaxt" name="horario" class="editar-materia-hora" value="<?php echo $mostrar['horario']?>">

        <p class="titulo-editar-materia-izquierdo">Lunes</p>
        <select class="editar-materia-lunes" name="Lunes">
          <option value="<?php echo $mostrar['Lunes']?>"><?php echo $mostrar['Lunes']?></option>
          <option value="Lengua Española">Lengua Española</option>
          <option value="Matematicas">Matematicas</option>
          <option value="Naturales">Naturales</option>
          <option value="Sociales">Sociales</option>
          <option value="Ingles">Ingles</option>
          <option value="Frances">Frances</option>
          <option value="Educacion Artistica">Educacion Artistica</option>
          <option value="Educacion Fisica">Educacion Fisica</option>
          <option value="Formacion Humana">Formacion Humana</option>
          <option value="Musica">Musica</option>
        </select>


        <p class="titulo-editar-materia-izquierdo">Martes</p>
        <select class="editar-materia-martes" name="Martes">
          <option value="<?php echo $mostrar['Lunes']?>"><?php echo $mostrar['Martes']?></option>
          <option value="Lengua Española">Lengua Española</option>
          <option value="Matematicas">Matematicas</option>
          <option value="Naturales">Naturales</option>
          <option value="Sociales">Sociales</option>
          <option value="Ingles">Ingles</option>
          <option value="Frances">Frances</option>
          <option value="Educacion Artistica">Educacion Artistica</option>
          <option value="Educacion Fisica">Educacion Fisica</option>
          <option value="Formacion Humana">Formacion Humana</option>
          <option value="Musica">Musica</option>
        </select>

        <div class="editar-materia-grupo-derecho">

                  <p class="titulo-editar-materia">Miercoles</p>
                  <select class="editar-materia-miercoles" name="Miercoles">
                    <option value="<?php echo $mostrar['Miercoles']?>"><?php echo $mostrar['Miercoles']?></option>
                    <option value="Lengua Española">Lengua Española</option>
                    <option value="Matematicas">Matematicas</option>
                    <option value="Naturales">Naturales</option>
                    <option value="Sociales">Sociales</option>
                    <option value="Ingles">Ingles</option>
                    <option value="Frances">Frances</option>
                    <option value="Educacion Artistica">Educacion Artistica</option>
                    <option value="Educacion Fisica">Educacion Fisica</option>
                    <option value="Formacion Humana">Formacion Humana</option>
                    <option value="Musica">Musica</option>
                  </select>


                  <p class="titulo-editar-materia">Jueves</p>
                  <select class="editar-materia-jueves" name="Jueves">
                    <option value="<?php echo $mostrar['Jueves']?>"><?php echo $mostrar['Jueves']?></option>
                    <option value="Lengua Española">Lengua Española</option>
                    <option value="Matematicas">Matematicas</option>
                    <option value="Naturales">Naturales</option>
                    <option value="Sociales">Sociales</option>
                    <option value="Ingles">Ingles</option>
                    <option value="Frances">Frances</option>
                    <option value="Educacion Artistica">Educacion Artistica</option>
                    <option value="Educacion Fisica">Educacion Fisica</option>
                    <option value="Formacion Humana">Formacion Humana</option>
                    <option value="Musica">Musica</option>
                  </select>



                  <p class="titulo-editar-materia">Viernes</p>
                  <select class="editar-materia-viernes" name="Viernes">
                    <option value="<?php echo $mostrar['Viernes']?>"><?php echo $mostrar['Viernes']?></option>
                    <option value="Lengua Española">Lengua Española</option>
                    <option value="Matematicas">Matematicas</option>
                    <option value="Naturales">Naturales</option>
                    <option value="Sociales">Sociales</option>
                    <option value="Ingles">Ingles</option>
                    <option value="Frances">Frances</option>
                    <option value="Educacion Artistica">Educacion Artistica</option>
                    <option value="Educacion Fisica">Educacion Fisica</option>
                    <option value="Formacion Humana">Formacion Humana</option>
                    <option value="Musica">Musica</option>
                  </select>

        </div>


        <div class="agregar-usuario-botones">
          <p>¿Deseas <a href="materiasAdmin.php">Regresar</a> ?</p>
        <input type="submit" value="Guardar" class="boton-guardar-2">
        </div>

      </div>
    </form>
  </body>
</html>
