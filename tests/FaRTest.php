 <?php
 require_once __DIR__ . "/../src/FaR.php";

 class FaRTest extends PHPUnit_Framework_TestCase
    {
        function test_FaRChecker_draw()
        {
        //arrange
            $input_one = "rock";
            $input_two = "rock";
            $test_RPS = new FaR($input_one, $input_two);

        //act
            $result = $test_RPS->FaRChecker();

        //assert
            $this->assertEquals("draw", $result);
        }

    }
?>
