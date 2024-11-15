<?php
header("Content-Type: application/json");
$mysqli = new mysqli("localhost", "root", "", "game1");
if ($mysqli->connect_error)
{
    echo json_encode(["message" => "error"]);
}
else
{
    $sql = "SELECT username, score FROM users ORDER BY score DESC;";
    $query = $mysqli->prepare($sql);
    $query->execute();
    $result = $query->get_result();
    if ($result->num_rows > 0)
    {


        echo json_encode([
            "message" => "success",
            "data" => $result->fetch_all(MYSQLI_ASSOC)
        ]);
    }
    else
    {
        echo json_encode([
            "message" => "error",
            "data" => null
        ]);
    }


    $mysqli->close();
}