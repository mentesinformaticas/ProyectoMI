
<?php
session_start();
 $usuario = $_SESSION['usuario'];
 if(!isset($usuario)){
   header("location: ../iniciarSesion.php");
 }
?>
<?php
$id=$_GET['id'];
$materia=$_GET['materia'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Mentes Informaticas">
    <link rel="icon" href="../imagenes/logos/logo.png">
    <link rel="stylesheet" href="../css/sistema.css">
    <title>Admin/Calificaciones/Editar</title>
  </head>
  <body>
    <?php
              include("../conexionbd/conectar.php");
              $consulta="SELECT *,materia FROM calificaciones c INNER JOIN asignatura a ON c.id_asignatura=a.id_asignatura WHERE id_calificaciones = '$materia'";
              $sql=mysqli_query($conexionbd,$consulta);
              $mostrar= mysqli_fetch_assoc($sql);


    ?>
    <form class="agregarUsuario" action="procesarActualizarNotas.php" method="POST">
        <div class="agregarUsuario-titulo">
            <h3>Editar Calificaciones</h3>
        </div>
        <div class="agregarUsuario-grupo-2">
             <input type="hidden" name="id" value="<?php echo $materia;?>">

            <p class="nombre-materia-editar"><?php echo $mostrar['materia']?></p>

              <div class="editar-notas-perido-1">
                <label for="nota1">Periodo uno</label>
                <input type="text" name="nota_uno" id="nota1" pattern="[0-9]+" value="<?php echo $mostrar['notas_uno']?>">
              </div>


              <div class="editar-notas-perido-2">
                <label for="nota2">Periodo dos</label>
                <input type="text" id="nota2" name="nota_dos" pattern="[0-9]+" value="<?php echo $mostrar['notas_dos']?>">
              </div>


          <div class="grupo-notas-izquierdo">
            <div class="editar-notas-perido-3">
              <label for="nota3">Periodo tres</label>
              <input type="text" id="nota3" name="nota_tres" pattern="[0-9]+" value="<?php echo $mostrar['notas_tres']?>">
            </div>


            <div class="editar-notas-perido-4">
              <label for="nota4">Periodo cuatro</label>
              <input type="text" id="nota4" name="nota_cuatro" pattern="[0-9]+" value="<?php echo $mostrar['notas_cuatro']?>">
            </div>
          </div>

        </div>

          <div class="agregar-usuario-botones-3">
            <p>¿Deseas<a href="adminNota.php?id=<?php echo $id;?>"> Regresar</a>? </p>
            <input type="submit" value="Guardar" id="boton-guardar-3">
          </div>
      </form>
    </form>
  </body>
</html>
