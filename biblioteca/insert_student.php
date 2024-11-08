<?php 
header("Content-Type: application/json");
$mysqli = new mysqli("localhost","root","","biblioteca");

if($mysqli->connect_error)
{
    echo json_encode(["message"=>"error"]);
}
else
{
    $sql="INSERT INTO alumnos(alumno_id,nombre,apellido) VALUES (NULL,?,?);";
    $query=$mysqli->prepare($sql);
    $name=$_POST["name"];
    $lastname=$_POST["lastname"];
    $query->bind_param("ss",$name,$lastname);
    if($query->execute())
    {
        echo json_encode(["message"=>"success"]);
    }
    else
    {
        echo json_encode(["message"=>"error"]);
    }
    $mysqli->close();
}