<?php
//establece la conexion
$servername ="localhost";
$username ="root";
$password="";
$dbname="postres";

$conn = new mysqli($servername,$username,$password,$dbname);

//verificamos la conecxion 
if($conn->connect_error){
    die ("conecxion fallida". $conn->connect_error);
}

//obtener los datos del formulario
$name=$_POST['name'];
$email =$_POST['email'];

$sql= "INSERT INTO sub (
    Nombre,
    Email
    )
VALUES (
'$name',
'$email'
)";

if($conn->query($sql)){
    echo "Registro Exitoso";
}
else{
    echo "Error al Registrar".$conn->error;
}
?>