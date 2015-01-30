<?php
require_once __DIR__ . '/../vendor/autoload.php';

$town = new Town("SomeTown", 2015, "34343434 34343434");
    for($a=0;$a<rand(0,100);$a++){
        $street = new Street('Street'.$a, 10, rand(100000,400000), rand(100000,400000));
        for ($b=0;$b<rand(0,100);$b++){
            $house = new House(rand(1,100), rand(5,9), rand(1,4), rand(50,300));
            for ($c=0;$c<rand(0,100);$c++){
                $house->addFlat(new Flat(rand(1,3), rand(20,100), rand(1,9), rand(1,5), rand(0,3), rand(0,1)));
            }
            $street->addHouse($house);
        }
        $town->addStreet($street);
    }    
echo $town->showInfoTown();

