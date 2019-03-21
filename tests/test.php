<?php

use PHPUnit\Framework\TestCase;
require_once "functions.php";

class Test extends TestCase
{
        $expected = echo config('name');
        $actual = siteName();
        $this->assertEquals($expected, $actual);
    
}