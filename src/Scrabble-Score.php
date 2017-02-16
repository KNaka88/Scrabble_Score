<?php
class ScrabbleScore
{
    private $user_input;

    function __construct($word)
    {
        $this->user_input = $word;
    }


    function calculateScore(){
        $total = 0;
        $word = strtoupper($this->user_input);
        $char_array = str_split($word);
        $char_dictionary = array(
            "A"=> 1,
            "E"=> 1,
            "I"=> 1,
            "O"=> 1,
            "U"=> 1,
            "L"=> 1,
            "N"=> 1,
            "R"=> 1,
            "S"=> 1,
            "T"=> 1,
            "D"=> 2,
            "G"=> 2,
            "B"=> 3,
            "C"=> 3,
            "M"=> 3,
            "P"=> 3,
            "F"=> 4,
            "H"=> 4,
            "V"=> 4,
            "W"=> 4,
            "Y"=> 4,
            "K"=> 5,
            "J"=> 8,
            "X"=> 8,
            "Q"=> 10,
            "Z"=> 10
        );

        echo count($char_array);

        for($i = 0; $i<count($char_array); $i++){
            $total += $char_dictionary[$char_array[$i]];
        }

        return $total;
    }

}
