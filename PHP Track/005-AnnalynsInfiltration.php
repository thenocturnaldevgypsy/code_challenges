<?php

class AnnalynsInfiltration
{
    // Task 1: Implementing canFastAttack
    public function canFastAttack($is_knight_awake)
    {
        return !$is_knight_awake; // Fast Attack is possible only if the knight is not awake
    }

    // Task 2: Implementing canSpy
    public function canSpy($is_knight_awake, $is_archer_awake, $is_prisoner_awake)
    {
        return $is_knight_awake || $is_archer_awake || $is_prisoner_awake; // Spy if at least one is awake
    }

    // Task 3: Implementing canSignal
    public function canSignal($is_archer_awake, $is_prisoner_awake)
    {
        return !$is_archer_awake && $is_prisoner_awake; // Signal if the archer is asleep and prisoner is awake
    }

    // Task 4: Implementing canLiberate
    public function canLiberate($is_knight_awake, $is_archer_awake, $is_prisoner_awake, $is_dog_present)
    {
        // Liberation cannot occur if the prisoner is awake
        if ($is_prisoner_awake) {
            return false; // Liberation cannot occur if the prisoner is awake
        }

        // Liberation can occur if both knight and archer are asleep and the dog is present
        if (!$is_knight_awake && !$is_archer_awake && $is_dog_present) {
            return true; // Liberation can occur if both knight and archer are asleep and the dog is present
        }

        // In all other cases, liberation is not possible
        return false; // Liberation cannot occur
    }
}

// Example Usage
$infiltration = new AnnalynsInfiltration();

// Test Cases for canLiberate
var_dump($infiltration->canLiberate(false, true, false, false)); // => false
var_dump($infiltration->canLiberate(false, false, false, true)); // => true
var_dump($infiltration->canLiberate(false, true, false, true)); // => false
var_dump($infiltration->canLiberate(true, true, false, true)); // => false
var_dump($infiltration->canLiberate(false, false, true, true)); // => false
var_dump($infiltration->canLiberate(false, false, true, false)); // => false
var_dump($infiltration->canLiberate(false, false, false, true)); // => true
var_dump($infiltration->canLiberate(true, false, true, true)); // => false

// Additional test cases
var_dump($infiltration->canLiberate(false, false, true, true)); // => false
var_dump($infiltration->canLiberate(true, true, false, true)); // => false
var_dump($infiltration->canLiberate(false, true, true, true)); // => false
