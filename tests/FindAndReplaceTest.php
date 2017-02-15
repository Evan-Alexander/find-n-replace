<?php

    require_once "src/FindAndReplace.php";

    class FindAndReplaceTest extends PHPUnit_Framework_TestCase
    {
        function testFindMatch()
        {
            //Arrange
           $test_FindAndReplace = new FindAndReplace;
           $string = "Hello World";
           $search_word = "World";

           //Act
           $result = $test_FindAndReplace->findWord($string, $search_word);

           //Assert
           $this->assertEquals("World", $result);
        }
    }
