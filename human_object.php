<?php

include "human_class.php";

$human = new Human("Jhon","Doe", 30, "Masculin", 1.80, 80);

echo $human->parler() . PHP_EOL;
echo $human->marcher() . PHP_EOL;
