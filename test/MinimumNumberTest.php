<?php

use MinimumNumber\MinimumNumber;
use PHPUnit\Framework\TestCase;

class MinimumNumberTest extends TestCase{

    public function testFindTheMinimum()
    {
        $operation= new MinimumNumber();
        $expected = 5;
        $response = $operation->compare(8,5);

        $this->assertSame($expected,$response);
        
    }

}