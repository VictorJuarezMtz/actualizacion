<?php

header('Content-Type: text/html; charset=UTF-8');

?>

<?php
include('../conexion.php');
session_start();
include('../preguntas.php');

 ?>






<?php 

$r=$_POST['respuesta26']; 
$p=$_POST['pregunta26'];

IF($p==$r){


$max=10;
}else{

	$max=0;
}

 ?>
 <br>

<?php 

$hola=$_POST['pregunta27'];
$mundo=$_POST['respuesta27'];

if($hola==$mundo){
	
	$max2=10;

}else{
	
	$max2=0;
}

 ?>
  <br>

 <?php 
$r=$_POST['respuesta28']; 
$p=$_POST['pregunta28'];

IF($p==$r){
$max3=10;
}else{
	
	$max3=0;
}

 ?>
 <br>
 <?php 
$r=$_POST['respuesta29']; 
$p=$_POST['pregunta29'];

IF($p==$r){

$max4=10;
}else{

	$max4=0;
}

 ?>
 <br>

 <?php 
$r=$_POST['respuesta30']; 
$p=$_POST['pregunta30'];

IF($p==$r){

$max5=10;
}else{

	$max5=0;
}







$r=$_POST['respuesta31']; 
$p=$_POST['pregunta31'];

IF($p==$r){


$max6=10;
}else{

  $max6=0;
}

 ?>
 <br>

<?php 

$hola=$_POST['pregunta32'];
$mundo=$_POST['respuesta32'];

if($hola==$mundo){
  
  $max7=10;

}else{
  
  $max7=0;
}

 ?>
  <br>

 <?php 
$r=$_POST['respuesta33']; 
$p=$_POST['pregunta33'];

IF($p==$r){
$max8=10;
}else{
  
  $max8=0;
}

 ?>
 <br>
 <?php 
$r=$_POST['respuesta34']; 
$p=$_POST['pregunta34'];
IF($p==$r){

$max9=10;
}else{

  $max9=0;
}

 ?>
 <br>

 <?php 
$r=$_POST['respuesta35']; 
$p=$_POST['pregunta35'];

IF($p==$r){

$max10=10;
}else{

  $max10=0;
}









 ?>
























<?php 



$res= $max2+$max+$max3+$max4+$max5+$max6+$max7+$max8+$max9+$max10;
$fin=$res*1;

$res2= $max2m+$maxm+$max3m+$max4m+$max5m+$max6m+$max7m+$max8m+$max9m+$max10m;
$fin2=$res2*1;


if (isset($fin)) {

if ($fin>70) {

  echo "pasaste el examen"; echo $fin;

    
// Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("La conexion ha fallado: " . $conn->connect_error);
            } 
            $clave=$_SESSION['id']; 
            //insertar en la bd las variables que ontiene de post
            $sql = "UPDATE inscrito SET modulo_3='$fin' where id_usuario='$clave';";

            if (mysqli_query($conn, $sql)) {
               echo " exito";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();


// Create connection
            $clave=$_SESSION['id']; 
  echo "intentalo de nuevo"; echo $fin;
$sql = "SELECT intento_3 FROM inscrito WHERE id_usuario = '$clave'";
    $result=$mysqli->query($sql);
    $rows = $result->num_rows;
    if($rows > 0) {
      $row = $result->fetch_assoc();
      $_POST['intento_3'] = $row['intento_3'];
      

  


      } 


// Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("La conexion ha fallado: " . $conn->connect_error);
            } 
           $test1=$_POST['intento_3'];
           $test2= $test1+'1';

            //insertar en la bd las variables que ontiene de post
            $sql = "UPDATE inscrito SET  intento_3='$test2' where id_usuario='$clave';";

            if (mysqli_query($conn, $sql)) {
               echo " exito";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();


         header("Location: ../ganador.php");
   
  # code...
}else{
   $clave=$_SESSION['id']; 
  echo "intentalo de nuevo"; echo $fin;
$sql = "SELECT intento_3 FROM inscrito WHERE id_usuario = '$clave'";
    $result=$mysqli->query($sql);
    $rows = $result->num_rows;
    if($rows > 0) {
      $row = $result->fetch_assoc();
      $_POST['intento_3'] = $row['intento_3'];
      

  


      } 


// Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("La conexion ha fallado: " . $conn->connect_error);
            } 
           $test1=$_POST['intento_3'];
           $test2= $test1+'1';

            //insertar en la bd las variables que ontiene de post
            $sql = "UPDATE inscrito SET  intento_3='$test2' where id_usuario='$clave';";

            if (mysqli_query($conn, $sql)) {
               echo " exito";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
            header("Location: ../perdedor.html");

}


 
}





 ?>