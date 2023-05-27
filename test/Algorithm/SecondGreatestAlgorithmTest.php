<?php

namespace Test\Algorithm;


use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use App\Algorithm\SecondGreatestAlgorithm;

/**
 * Class GreatestAlgorithmTest
 *
 * @package Test\Algorithm
 */
class SecondGreatestAlgorithmTest extends TestCase
{
    public function testConstructor()
    {
        $this->expectNotToPerformAssertions();
        $this->testFindEquals();
    }

    public function testFindEquals()
    {
        $items = [1, 2, 3, 4, 5, 6];
        $largeItem = 2;
        $secondGreatestAlgorithm = new SecondGreatestAlgorithm($items, $largeItem);
        $item = $secondGreatestAlgorithm->find();
        $exceptedResult = 5;
        $this->assertEquals($exceptedResult,$item);
    }


}
