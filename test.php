<?php
$name=$_POST["name"];
$age=$_POST["age"];
echo "Hola $name";
echo "<br>";
echo "Tienes $age";
echo "<br>";
echo "Dentro de 30 años tendrás: ".($age+30);
echo "<br>";
if($age<0){
    echo "Aún no naces";
}
else if($age>=0 && $age<18)
{
    echo "Eres menor de edad, no puedes tomar alcohol";
}
else{
    echo "Eres mayor de eded, puedes destruirte el hígado";
}

$grades=array();
$grades[0]=$_POST["grade1"];
$grades[1]=$_POST["grade2"];
$grades[2]=$_POST["grade3"];

$result=0;
for($i=0;$i<count($grades);$i++)
{
    $result+=$grades[$i];
}
echo "<br>";

echo "Tu promedio es: ".($result/count($grades));