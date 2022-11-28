<!-- include: -->
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
    <title>Admin/Profesores</title>
  </head>
  <?php
    include("../conexionbd/conectar.php");
        $consulta="SELECT nombre_curso,id_curso FROM curso";
        $resultado = mysqli_query($conexionbd, $consulta);
        $asociar_curso=mysqli_fetch_assoc($resultado)
  ?>
  <body>
      <?php
    include("../conexionbd/conectar.php");

    $consulta = "SELECT p.id_profesor,nombre,apellido,f_nacimiento,sexo,correo,usuario_profesor,clave,direccion,telefono,materia,nombre_curso FROM profesor p INNER JOIN asignatura a ON p.id_asignatura = a.id_asignatura INNER JOIN curso c ON p.id_curso=c.id_profesor";
    $conectar = mysqli_query($conexionbd, $consulta);

    ?>
    <header id="header-profesor">
      <figure class="logo-sistema">
          <img src="../imagenes/login-fondo.jpg" alt="Fondo Header" id="imagen-fondo-header">
      </figure>
      <nav class="menu-all" id="menu-profesor">
          <ul class="lista-padre-menu">
              <li class="lista-menu"><a href="adminInicio.php">Inicio</a></li>
              <li class="lista-menu"><a href="materiasAdmin.php">Materia</a></li>

              <li class="lista-menu navegacion-profesor"><a href="#">Profesores</a></li>
              <li class="lista-menu"><a href="estudiante.php">Estudiantes</a></li>
              <li class="lista-menu"><a href="cursoAdmin.php">Curso</a></li>
              <li class="lista-menu"><a href="cerrarSesion.php">Cerrar Sesion</a></li>
          </ul>
      </nav>
    </header>
    <main>
      <div class="main-all">
        <h3 id="titulo-profesores">Profesores</h3>
        <table id='tabla-profesor'>
          <tr class="titulos-nombres-profesor">
            <td>Nombre</td>
            <td>Apellido</td>
            <td>F_nacimiento</td>
            <td>Sexo</td>
            <td>Correo</td>
            <td>Usuario</td>
            <td>Contraseña</td>
            <td>Telefóno</td>
            <td>Dirección</td>
            <td>Asignatura</td>
            <td>Curso</td>
            <td></td>
          </tr>
          <?php while ($mostrar = mysqli_fetch_assoc($conectar)) {
          ?>
            <tr>
                <th class="tabla-profesor-nombres"><?php echo $mostrar["nombre"]?></th>
                <th><?php echo $mostrar["apellido"]?></th>
                <th><?php echo $mostrar["f_nacimiento"]?></th>
                <th><?php echo $mostrar["sexo"]?></th>
                <th class="correo"><?php echo $mostrar["correo"]?></th>
                <th><?php echo $mostrar["usuario_profesor"]?></th>
                <th><?php echo $mostrar["clave"]?></th>
                <th><?php echo $mostrar["telefono"]?></th>
                <th><?php echo $mostrar["direccion"]?></th>
                <th><?php echo $mostrar["materia"]?></th>
                <th><?php echo $mostrar["nombre_curso"]?></th>
                <th><a href="editarProfesores.php?id=<?php echo $mostrar['id_profesor'];?>">Editar</a>

                <a href="eliminarProfesor.php?id=<?php echo $mostrar["id_profesor"];?>">Eliminar</a></th>

            </tr>
            <?php  }?>

        </table>
        <form class="formulario-agregar" action="agregarProfesor.php" method="post">
            <input type="submit" value="Agregar Usuario">
        </form>
      </div>
    </main>
    <footer>
        <p>&copy;Todos los Derechos Reservados - Mentes Informaticas 2022</p>
    </footer>
  </body>
</html>
