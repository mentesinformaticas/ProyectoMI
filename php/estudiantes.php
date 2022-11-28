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
    <title>Admin/Estudiantes</title>
  </head>
  <body>
    <header id="header-profesor">
      <figure class="logo-sistema">
          <img src="../imagenes/login-fondo.jpg" alt="Fondo Header" id="imagen-fondo-header">
      </figure>
      <nav class="menu-all" id="menu-profesor">
          <ul class="lista-padre-menu">
              <li class="lista-menu"><a href="adminInicio.php">Inicio</a></li>
              <li class="lista-menu"><a href="materiasAdmin.php">Materia</a></li>
              <li class="lista-menu"><a href="adminNota.php">Calificaciones</a></li>
              <li class="lista-menu"><a href="profesor.php">Profesores</a></li>
              <li class="lista-menu navegacion-profesor"><a href="#">Estudiantes</a></li>
              <li class="lista-menu"><a href="cursoAdmin.php">Curso</a></li>
              <li class="lista-menu"><a href="cerrarSesion.php">Cerrar Sesion</a></li>
          </ul>
      </nav>
    </header>
    <main>
      <div class="main-all">
        <h3 id="titulo-estudiantes">Estudiantes</h3>
        <table id='tabla-estudiantes'>
          <tr class="titulos-nombres-estudiantes">
            <td>Lista</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Telefóno</td>
            <td>Dirección</td>
            <td>Fecha de Nacimiento</td>
            <td>Curso</td>
            <td></td>
          </tr>
            <tr>
                <th class="lista-id">1</th>
                <th class="tabla-estudiantes-nombres">Miguel</th>
                <th>Enrique Gonzales</th>
                <th>nosenotengo@gmail.com</th>
                <th>809 999 7777</th>
                <th>micasa, no recuerdo donde</th>
                <th>1 de enero</th>
                <th>2do A</th>
                <th><a href="editarProfesores.php">Editar</a></th>
            </tr>
            <tr>
              <th class="lista-id">2</th>
              <th class="tabla-estudiantes-nombres">Isma NolNol</th>
              <th>Perez Martes</th>
              <th>wkdhwdhk@gmail.com</th>
              <th>829 999 3333</th>
              <th>mi casa, al lado del vecino casa verde</th>
              <th>3 de febrero</th>
              <th>4to B</th>
              <th><a href="editarProfesores.php">Editar</a></th>
            </tr>
            <tr>
              <th class="lista-id">3</th>
              <th class="tabla-estudiantes-nombres">Nombre Profesor 3</th>
              <th>Apellido estudiante 3</th>
              <th>Correo estudiante 3</th>
              <th>Telefono estudiante 3</th>
              <th>Direccion estudiante 3</th>
              <th>Fecha de nacimiento estudiante 3</th>
              <th>Curso estudiante 3</th>
              <th><a href="editarProfesores.php">Editar</a></th>
            </tr>
            <tr>
              <th class="lista-id">4</th>
              <th class="tabla-estudiantes-nombres">Nombre Profesor 4</th>
              <th>Apellido estudiante 4</th>
              <th>Correo estudiante 4</th>
              <th>Telefono estudiante 4</th>
              <th>Direccion estudiante 4</th>
              <th>Fecha de Nacimiento estudiante 4</th>
              <th>Curso estudiante 4</th>
              <th><a href="editarProfesores.php">Editar</a></th>
            </tr>
        </table>
        <form class="formulario-agregar" action="agregarUsuario.php" method="post">
            <input type="submit" value="Agregar Usuario">
        </form>
      </div>
    </main>
    <footer>
        <p>&copy;Todos los Derechos Reservados - Mentes Informaticas 2022</p>
    </footer>
  </body>
</html>
