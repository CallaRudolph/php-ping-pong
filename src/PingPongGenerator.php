<?php

    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {

            if (!is_numeric($input_number)) {
                return "error";
            } else {
                $array = [];
                // $index = 0;
                // $counter_limit = $input_number;
                for ($index = 1; $index <= $input_number; $index++) {
                    array_push($array, $index);
                }
                return $array;
            }
        }
    }
?>
