<html>
<body>
<h2>Problemas de la tarea 1.4 <hr></h2>
<h3>Mayor de 3 numeros</h3>
<h2>Descripcion</h2>
<p>Realiza un problema que imprima el mayor de tres números.</p>
<h2>Entrada</h2>
<p>Escribe 3 numeros enteros a,b,c</p>
<h2>Salida</h2>
<p>El número entero mayor de los tres números introducidos.</p>
<table border="1">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>10 <br>
                8  <br>
               -7
            </td>
            <td>10</td>
        </tr>
        <tr>
            <td>10<br>
                81<br>
                101
            </td>
            <td>101</td>
        </tr>
        <tr>
            <td>11 <br>
                11 <br>
                11
            </td>
            <td>11</td>
        </tr>
        <tr>
            <td>10 <br>
                810 <br>
                101
            </td>
            <td>810</td>
        </tr>
    </table>
</table>

<?php
//PRIMER CODIGO
$a=10;
$b=8;
$c=-7;
if($a>$b and $a>$c)
{
echo "El mayor es: ", $a, "<HR>";
}
?>
<h3>¿Cuanto vale 7?</h3>
<h2>Descripcion</h2>
<p>Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7</p>
<h2>Entrada</h2>
<p>Dos enteros en el rango  -1000 a +1000</p>
<h2>Salida</h2>
<p>La cantidad de enteros iguales a 7.</p>
<table border="1">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>-3 8 <br>
            <td>0</td>
        </tr>
        <tr>
            <td>7 57 <br>
            <td>1</td>
        </tr>
        <tr>
            <td>62 7 <br>
            <td>1</td>
        </tr>
        <tr>
            <td>7 7<br>
            <td>2</td>
        </tr>
    </table>
</table>
<?php
//SEGUNDO CODIGO
$x=7;
$y=57;
if($x=7 and $y==1)
{
echo "La cantidad de 7 que hay son: ", "<hr>";
}
?>
</body>
</html>