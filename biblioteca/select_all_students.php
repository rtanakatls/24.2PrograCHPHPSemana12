<?php 
header("Content-Type: application/json");
$mysqli = new mysqli("localhost","root","","biblioteca");

if($mysqli->connect_error)
{
    echo json_encode(["message"=>"error"]);
}
else
{
    $sql="SELECT nombre AS name, apellido AS lastname FROM alumnos ;";
    $query=$mysqli->prepare($sql);
    $query->execute();
    $results=$query->get_result();
    if($results->num_rows>0)
    {

        echo json_encode(["data"=>$results->fetch_all(MYSQLI_ASSOC)]);
    }
    else
    {
        echo json_encode(["data"=>null]);
    }
    $mysqli->close();
}