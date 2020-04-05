<?php

use PHPUnit\Framework\TestCase;
// require("src/Calculator.php");

class CalculatorTest extends TestCase{

    private $calc;
    protected function setUp():void{
        $this->calc = new App\Calculator();
    }

    function testAdditionOfTwoNumbers(){
        $result = $this->calc->add(2,3);
        $this->assertEquals(5,$result);
    }

    function testAdditionOfMultipleNumbers(){
        $result = $this->calc->add(2,3,4,5);
        $this->assertEquals(14,$result);
    }

    function testSubtractionOfTwoNumbers(){
        $result = $this->calc->subtract(7,3);
        $this->assertEquals(4,$result);
    }
    
    function testMultiplicationOfTwoNumbers(){
        $result = $this->calc->multiply(7,3);
        $this->assertEquals(21,$result);

        $result = $this->calc->multiply(10,2);
        $this->assertEquals(20,$result);

        $result = $this->calc->multiply(30,3);
        $this->assertEquals(90,$result);
    }


    function dataProviderForMultiplication(){
        return [
            [7,3,21],
            [7,8,56],
            [12,12,144],
            [11,9,99],
        ];
    }

    /** @dataProvider dataProviderForMultiplication */
    function testMultiplicationOfTwoNumbersUsingDataProvider($a, $b, $expected){
        $result = $this->calc->multiply($a,$b);
        $this->assertEquals($expected,$result);
    }
}