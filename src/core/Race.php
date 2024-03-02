<?php

namespace CarGame\core;

class Race extends vehicles
{


    public $firstPlayerChoice;

    public $secondPlayerChoice;

    public $firstPlayerTime;

    public $secondPlayerTime;

    public $vehicles;

    public function __construct()
    {
        $this->vehicles = $this->getVehicles();
    }

    public function checkFirstPlayerInput()
    {
        try {
            do {
                // Prompt the user to select an option
                $input1 = \cli\input();

                // Validate the user's input
                $isValidInput = in_array($input1, $this->getVehiclesNames());

                // If the input is not valid, display an error message
                if (!$isValidInput) {
                    \cli\out("Invalid input. Please try again.\n");
                }
            } while (!$isValidInput);

            // Display the selected option
            \cli\out("Player 1 selected: $input1\n");
            $this->firstPlayerChoice = $input1;

        } catch (\Exception $e) {
            // Catch exceptions r
            \cli\out("An error occurred: {$e->getMessage()}\n");
        }

    }

    public function checkSecondPlayerInput()
    {
        try {
            do {
                $input = \cli\input();

                $isValidInput = in_array($input, $this->getVehiclesNames());

                if ($input == $this->firstPlayerChoice) {
                    $isValidInput = false;
                    \cli\out("Pay attention. This item selected by player 1 \n");
                }

                if (!$isValidInput) {
                    \cli\out("Invalid input. Please try again.\n");
                }
            } while (!$isValidInput);

            \cli\out("player 2 selected: $input\n");
            $this->secondPlayerChoice = $input;

        } catch (\Exception $e) {

            \cli\out("An error occurred: {$e->getMessage()}\n");
        }

    }

    public function calculateTime($distance)
    {



        foreach ($this->vehicles as $vehicle) {
            if ($vehicle['name'] == $this->firstPlayerChoice) {
                $this->firstPlayerTime = $distance / $vehicle['maxSpeed'];
            }

            if ($vehicle['name'] == $this->secondPlayerChoice) {
                $this->secondPlayerTime = $distance / $vehicle['maxSpeed'];
            }
        }


        \cli\out("And the game began \n");
        sleep(5);

    }


    public function result()
    {
        if ($this->firstPlayerTime > $this->secondPlayerTime){
            \cli\out('Congregation player 2'."\n".'YOU ARE THE WINNER'."\n");
        }elseif($this->firstPlayerTime == $this->secondPlayerTime){
            \cli\out('Nice try'."\n".'TIE'."\n");
        }else{
            \cli\out('Congregation player 1'."\n".'YOU ARE THE WINNER'."\n");
        };

        \cli\out('Player 1 finished time =>' . $this->firstPlayerTime . "\n");

        \cli\out('Player 2 finished time =>' . $this->secondPlayerTime . "\n");
    }
}