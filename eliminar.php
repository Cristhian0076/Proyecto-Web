<?php



$host="localhost";
$user="root";
$contra="";
$db="base";

$conectar=mysqli_connect($host,$user,$contra,$db);


$id=$_REQUEST['ID'];
$sql="DELETE FROM usuarios2 WHERE id_usuario=$id;";
$result=mysqli_query($conectar,$sql);

echo $sql;

header("Location:lista.php")

?>