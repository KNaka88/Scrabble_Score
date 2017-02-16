<?php
class ScrabbleScore
{
    private $user_input;

    function __construct($word)
    {
        $this->user_input = $word;
    }

    function calculateScore(){
        $word = $this->user_input;
        return $this->x;
    }

}
