<?php

    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {

            if (!is_numeric($input_number)) {
                return "error";
            } else {
                $array = [];
                for ($index = 1; $index <= $input_number; $index++) {
                    array_push($array, $index);
                    if (($index % 3) == 0) {
                        array_pop($array);
                        array_push($array, "ping");
                    } else if (($index % 5) == 0) {
                        array_pop($array);
                        array_push($array, "pong");
                    }
                }
                return $array;
            }
        }
    }
?>
