<?php
echo "test";
echo "<br>";

$n=10;

for($i=1; $i<= $n; $i++)
{
    echo "$i";
    echo "<br>";
}
echo "<br>";

$n=10;
for($i=2; $i<=$n; $i+=2)
{
    echo "$i";
    echo "<br>";
}
echo "<br>";

$n=10;
$suma=0;
for($i=1; $i<= $n; $i++)
{
    $suma += $i;
}
echo $suma;
echo "<br>";

$potencia=5;
$resultado=1;
$base=2;
for($i=1; $i<= $potencia; $i++)
{
    $resultado *= $base;
}
echo $resultado;
echo "<br>";

$base=5;
$resultado=1;
for($i=1; $i<=$base; $i++)
{
    $resultado*= $i;
}
echo $resultado;
echo "<br>";

$f= array();
$f[0]= 0;
$f[1]= 1;
$n=10;
$Resultado=1;
for($i=2;$i<=$n;$i++)
{
    $f[$i]=$f[$i-1]+$f[$i-2];
}
for($i=0; $i<=$n; $i++)
{
    echo $f[$i];
    echo "<br>";
}
echo "<br>";

$n=1234;
$contador=0;

for($i=$n; $i>=1; $i/=10)
{
    $contador++;
}
echo $contador;
echo "<br>";



$n=4567;
$ultimo_digito = $n %10;
for($i=$n; $i>=10; $i/=10)
{
   $n /= 10;
}
$primer_digito = (int)$n;
echo "<br>";
echo "El PRIMER digito es: " . $primer_digito;
echo "<br>";
echo "El ultimo digito es: " . $ultimo_digito;
?>