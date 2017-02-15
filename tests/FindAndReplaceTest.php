<?php

    require_once "src/FindAndReplace.php";

    class FindAndReplaceTest extends PHPUnit_Framework_TestCase
    {
        // function testFindMatch()
        // {
        //     //Arrange
        //    $test_FindAndReplace = new FindAndReplace;
        //    $string = "Hello World";
        //    $search_word = "World";
        //
        //    //Act
        //    $result = $test_FindAndReplace->findAndReplaceWord($string, $search_word);
        //
        //    //Assert
        //    $this->assertEquals("World", $result);
        // }

        function testReplaceWord()
        {
            //Arrange
           $test_FindAndReplace = new FindAndReplace;
           $string = "Hello World, how are you?";
           $search_word = "World";
           $replace_word = "Universe";

           //Act
           $result = $test_FindAndReplace->findAndReplaceWord($string, $search_word, $replace_word);

           //Assert
           $this->assertEquals("Hello Universe, how are you?", $result);
        }
    }
