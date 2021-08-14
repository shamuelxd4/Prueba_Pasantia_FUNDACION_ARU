<!-- PRUEBA INCISO 2 REGISTRO DE ASISTENCIA -->

<?php
 require 'conexion.php';
  
 $nombre  = $_POST['nombre'];
 $apellido  = $_POST['apellido'];
 $email = $_POST['email'];

$insertar = "INSERT INTO registro VALUES ('$nombre','$apellido','$email') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../index.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.php';
    </script>";
}
?>