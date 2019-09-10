<?php

use Acme\Person;
use Acme\League;
use Acme\Team;

/*  On peut aussi utiliser 
    use Acme\{Person, League, Team};
*/

echo random_number();
echo "<br/>";

new Song;

$ipalkot = new Person("Georges PALAKOT"); 
$ajones = new Person ("Aneth Jones");

$barcelona = new Team("Barcelona");
$real = new Team("Real");

$ipalkot->favorite($real);
$ajones->favorite($barcelona);
$ajones->favorite($real);


echo $barcelona->getName() ." a " . $barcelona->getNombreFans() . " Fans ";
echo "<br/>";
echo $real->getName()." a " . $real->getNombreFans() . " Fans ";
echo "<br/>";

$liga = new League("Liga");
$liga->addTeam($barcelona);
$liga->addTeam($real);

echo "TeamNumber : " .$liga->getTeamCount();