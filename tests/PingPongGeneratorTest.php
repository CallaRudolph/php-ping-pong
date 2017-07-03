<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makePingPong_error()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "e";

            $result = $test_PingPongGenerator->generatePingPongArray($input);

            $this->assertEquals("error", $result);
        }
    }

?>
