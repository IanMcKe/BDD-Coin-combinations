<?php
    require_once "src/Coin.php";

    class CoinTest extends PHPUnit_Framework_TestCase
    {
        function test_makeChangeOneDollar()
        {
            //Arrange
                $test_Coin = new Coin;
                $input = 1;
            //Act
                $result = $test_Coin->makeChange($input);
            //Assert
                $this->assertEquals(array("4 quarters","","",""), $result);
        }
    }
?>
