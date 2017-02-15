<?php
    class FaR
    {

        private $sentence;
        private $find;
        private $replace;


        function __construct($input_one, $input_two, $input_three)
        {
        $this->sentence = $input_one;
        $this->find = $input_two;
        $this->replace = $input_three;
    }

        function FaRChecker()
        {
            $sentence = $this->sentence;
            $find = $this->find;
            $replace = $this->replace;

            $sentence = explode(" ", $sentence);
            $result = array();
            foreach ($sentence as $word)
            {
                if ($word == $find)
                {
                    $word = $replace;
                    array_push($result, $word);
                }else {
                    array_push($result, $word);
                }

            }
            $result = implode(" ", $result);
            return $result;
        }
    }

?>
