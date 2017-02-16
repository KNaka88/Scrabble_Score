<?php

    require_once "src/Scrabble-Score.php";

    class ScrabbleScore_test extends PHPUnit_Framework_TestCase
    {

        function test_scrabbleScore_()
        {
            //Arrange
            $user_input = "art";
            $test_calculateScore = new ScrabbleScore($user_input);


            //Act
            $result = $test_calculateScore->calculateScore();

            //Assert
            $this->assertEquals(3, $result);

        }



    }
