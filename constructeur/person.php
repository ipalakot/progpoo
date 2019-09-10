<?php
class Person {
    var $fisrtname;
    var $lastname;
    var $age;

    public function __construct($fisrtname, $lastname, $age){
        $this->firstname=$fisrtname;
        $this->lastname=$lastname;
        $this->age=$age;    
    }

    public function fullname(){
        echo $this->firstname . "  " .$this->lastname ."  " .$this->age;
    }
}

$cl1 = new Person('Palakot', 'Igor', '46');
$cl2= new Person('Netin', 'Nanette', '37');

$cl1->fullname();
echo'</br>';

$cl2->fullname();


/*
echo $cl1->firstname ; 
echo'</br>';
echo $cl1->lastname ;
echo'</br>';
echo $cl1->age ;
 echo'</br>';

echo $cl2->firstname ;
echo'</br>';
echo $cl2->lastname ;
echo'</br>';
echo $cl2->age ;
*/
