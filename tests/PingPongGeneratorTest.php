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

        function test_makePingPong_count()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 2;

            $result = $test_PingPongGenerator->generatePingPongArray($input);

            $this->assertEquals([1,2],  $result);
        }

        function test_DivideByThree()
        {

            $test_PingPongGenerator = new PingPongGenerator;
            $input = 6;

            $result = $test_PingPongGenerator->generatePingPongArray($input);

            $this->assertEquals([1, 2, "ping", 4, 5, "ping"], $result);
        }
    }
?>
