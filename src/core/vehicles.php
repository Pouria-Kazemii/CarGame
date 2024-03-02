<?php

namespace CarGame\core;

class vehicles
{


    public function getVehicles()
    {
        $vehicles = json_decode(file_get_contents('vehicles.json') , true );
        $evenUnitVehicles = [];
        //make units even
        foreach ($vehicles as $vehicle){
                if ($vehicle['unit'] == 'knots' or $vehicle['unit'] == 'Kts') {
                    $evenUnitVehicles [] =  [
                        'name' => $vehicle['name'],
                        'maxSpeed' => round($vehicle['maxSpeed']*1.85),
                        'unit' => "Km/h"
                    ];
                }else{
                    $evenUnitVehicles [] = $vehicle;
                }
            }
        return ($evenUnitVehicles);
    }

    public function getVehiclesNames()
    {
        $vehicles = json_decode(file_get_contents('vehicles.json') , true );;

        $names = [];
        foreach ($vehicles as $vehicle){
           $names [] = $vehicle['name'];
        }

        return $names;
    }
}