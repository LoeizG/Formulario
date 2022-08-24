
<?php
include('conexion.php');

if(!empty($_POST) )

{
    echo "<br>"."Nombre: ". $nombre = $_POST['firstName'];
    echo "<br>"."Apellido: ". $apellido = $_POST['lastName'];
    echo "<br>"."Cedula: ". $cedula = $_POST['cedula'];
    echo "<br>"."Sexo: ". $sexo = $_POST['gender'];
    echo "<br>"."Fecha de Nacimiento: ". $fchnacimiento = $_POST['birdate'];
    echo "<br>"."Direccion: ". $direccion= $_POST['address'];
    echo "<br>"."Correo: ". $correo= $_POST['email'];
    echo "<br>"."Institucion: ". $institucion= $_POST['institution'];
    echo "<br>"."Especialidad: ". $especialidad= $_POST['especialty'];
    echo "<br>"."Telefono: ". $telefono= $_POST['tel'];
    
}
else
{   
    echo "No se ha recibido el formulario";
}

$sql = "INSERT INTO usuario 
(nombre, apellido, cedula, sexo, fecha_nacimiento, direccion, correo, institucion, especialidad, telefono) 
VALUES ('$nombre', '$apellido', '$cedula','$sexo', '$fchnacimiento', '$direccion ', '$correo', '$institucion', '$especialidad', '$telefono')";

mysqli_query($conexion, $sql);

mysqli_close($conexion);


header("refresh:5;url=../index.html");
?>
