<?php

    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {
            if ($input_number > 1000) {
              $array = [];
              array_push($array, "Please enter a lower number. I'm not Watson.");
            }
            else {
            $array = [];
            for ($index = 1; $index <= $input_number; $index++) {
                array_push($array, $index);
                if (($index % 15) == 0) {
                   array_pop($array);
                   array_push($array, "ping-pong");
                } else if (($index % 3) == 0) {
                    array_pop($array);
                    array_push($array, "ping");
                } else if (($index % 5) == 0) {
                    array_pop($array);
                    array_push($array, "pong");
                }
            }
          }
          return $array;
        }
    }
?>
