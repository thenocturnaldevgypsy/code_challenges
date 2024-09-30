<?php

class AnnalynsInfiltration
{
    // Task 1: Implementing canFastAttack
    public function canFastAttack($is_knight_awake)
    {
        // Fast Attack is possible only if the knight is not awake
        return !$is_knight_awake;
    }

    // Task 2: Implementing canSpy
    public function canSpy($is_knight_awake, $is_archer_awake, $is_prisoner_awake)
    {
        // Spy action is available if at least one of the characters is asleep
        return !$is_knight_awake || !$is_archer_awake || !$is_prisoner_awake;
    }

    // Task 3: Implementing canSignal
    public function canSignal($is_archer_awake, $is_prisoner_awake)
    {
        // Signal action is possible if the archer is asleep and the prisoner is awake
        return !$is_archer_awake && $is_prisoner_awake;
    }

    // Task 4: Implementing canLiberate
    public function canLiberate($is_knight_awake, $is_archer_awake, $is_prisoner_awake, $is_dog_present)
    {
        // Liberate Prisoner is possible if the prisoner is awake and either the dog is present or both knight and archer are asleep
        return $is_prisoner_awake && ($is_dog_present || (!$is_knight_awake && !$is_archer_awake));
    }
}

// Example Usage
$is_knight_awake = true;
$infiltration = new AnnalynsInfiltration();
var_dump($infiltration->canFastAttack($is_knight_awake)); // => false

$is_knight_awake = false;
$is_archer_awake = true;
$is_prisoner_awake = false;
var_dump($infiltration->canSpy($is_knight_awake, $is_archer_awake, $is_prisoner_awake)); // => true

$is_archer_awake = false;
$is_prisoner_awake = true;
var_dump($infiltration->canSignal($is_archer_awake, $is_prisoner_awake)); // => true

$is_knight_awake = false;
$is_archer_awake = true;
$is_prisoner_awake = false;
$is_dog_present = false;
var_dump($infiltration->canLiberate($is_knight_awake, $is_archer_awake, $is_prisoner_awake, $is_dog_present)); // => false
