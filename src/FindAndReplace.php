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






        function findWord($input_string, $input_search_word)
        {
            $input_string_array = explode(" ", $input_string);
            if (empty($input_string_array)){
                return "Please input sentence";
            }else{
                if(in_array($input_search_word, $input_string_array)){
                    return $input_search_word;
                }
            }
            // user enters sentence as string
            // user enters word to match a word in string
        }

        // function replaceWord()
        // {
        //     word replaces all matching words within string with a NEW word
        // }




    }
