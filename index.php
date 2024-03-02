<?php

use CarGame\core\Race;
use CarGame\core\vehicles;

require_once 'vendor/autoload.php';

$vehichels = new vehicles();
$race = new Race();

cli\out('Welcome to the game'."\n");
sleep(2);

cli\out('You can choice eny of this vehicles');
sleep(2);

$table = new \cli\Table();
$table->setRows([$vehichels->getVehiclesNames()]);
$table->display();
sleep(5);

cli\out('Now you must choose player one'."\n".'Tell us your choice:');
$race->checkFirstPlayerInput();

cli\out('Its your turn player two:');
$race->checkSecondPlayerInput();

//enter Km
$race->calculateTime(100);

$race->result();