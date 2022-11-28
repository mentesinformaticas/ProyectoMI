<?php
session_start();
 $usuario = $_SESSION['usuario'];
 if(!isset($usuario)){
   header("location: ../iniciarSesion.php");
 }
?>
<?php
include("../conexionbd/conectar.php");
$id=$_GET['id'];
$curso=$_GET['curso'];

echo $curso;
$insertar = "INSERT INTO asistencia(id_estudiante,id_curso,lunes,martes,miercoles,jueves,viernes) VALUES ('$id', '$curso', ' ', ' ', ' ', ' ', ' ')";

$resultado = mysqli_query($conexionbd, $insertar);
if (!$resultado) {
     echo "
      <script>
      alert('Error al agregar asistencia');
           history.go(-2);
      </script> ";
       exit;

 }
 else {
      echo "
      <script>
      alert('Se agregado la asistencia correctamente');
       history.go(-2);
      </script> ";


 }

?>
