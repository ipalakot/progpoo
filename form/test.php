<?php 

require 'vendor/autoload.php';

echo(new Carre(4))->aire();
echo"<br/>";
echo(new Cercle(3))->aire();
echo"<br/>";
echo(new Triangle(3, 2))->aire();
echo"<br/>";
