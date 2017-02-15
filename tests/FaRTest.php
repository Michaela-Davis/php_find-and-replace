 <?php
 require_once __DIR__ . "/../src/FaR.php";

 class FaRTest extends PHPUnit_Framework_TestCase
    {
        function test_FaRChecker_basic()
        {
        //arrange
            $sentence = "cat I walk the cat";
            $find = "cat";
            $replace = "dog";
            $test_FaR = new FaR($sentence, $find, $replace);

        //act
            $result = $test_FaR->FaRChecker();

        //assert
            $this->assertEquals("dog I walk the dog", $result);
        }

    }
?>
