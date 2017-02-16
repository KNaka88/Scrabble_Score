<?php

    require_once "src/Scrabble-Score.php";

    class CanAttack_test extends PHPUnit_Framework_TestCase
    {

        function test_scrabbleScore_()
        {
            //Arrange
            $user_input = "word";
            $test_calculateScore = new ScrabbleScore($user_input);


            //Act
            $result = $test_calculateScore->calculateScore();

            //Assert
            $this->assertEquals(8, $result);

        }



    }
