<?php

    class FindAndReplace
    {

        private $string;
        private $search_word;
        private $replace_word;

        // function __construct($string, $search_word, $replace_word)
        // {
        //     $this->string = $string;
        //     $this->search_word = $search_word;
        //     $this->replace_word = $replace_word;
        // }

        function setWords($new_string, $new_search_word, $new_replace_word){
            $this->string = $new_string;
            $this->search_word = $new_search_word;
            $this->replace_word = $new_replace_word;
        }

        function getString(){
            return $this->string;
        }

        function getSearchWord(){
            return $this->search_word;
        }

        function getReplaceWord(){
            return $this->replace_word;
        }






        function findAndReplaceWord($input_string, $input_search_word, $replace_word)
        {

            var_dump($input_string);
            $input_string_array = explode(" ", $input_string);
            var_dump($input_string_array);
            if (empty($input_string_array)){
                return "Please input sentence";
            }else{
                return preg_replace('/'. $input_search_word . '/i', $replace_word, $input_string);
            }
        }

    }
