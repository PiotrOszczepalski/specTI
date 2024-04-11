<?php

session_start();

class GameController {
    private $targetNumber;

    public function __construct() {
        if (!isset($_SESSION['targetNumber'])) {
            $this->generateTargetNumber();
        } else {
            $this->targetNumber = $_SESSION['targetNumber'];
        }
    }

    private function generateTargetNumber() {
        $this->targetNumber = rand(1, 10);
        $_SESSION['targetNumber'] = $this->targetNumber;
    }

    public function checkGuess($guess) {
        if (!is_numeric($guess) || $guess < 1 || $guess > 10 || $guess != round($guess)) {
            return "Błąd! Wprowadź liczbę całkowitą od 1 do 10.";
        }

        if ($guess == $this->targetNumber) {
            $guessedNumber = $this->targetNumber; 
            $this->generateTargetNumber();
            return "Gratulację! Zgadłeś liczbę {$guessedNumber}! <br> Spróbuj ponownie!";
        } elseif ($guess < $this->targetNumber) {
            return "Za mało! Spróbuj wpisać większą liczbę.";
        } else {
            return "Za dużo! Spróbuj wpisać mniejszą liczbę.";
        }
    }
}

