<?php

use PHPUnit\Framework\TestCase;
require "samplephpwebsite/functions.php";
require "samplephpwebsite/config.php";

class Test extends TestCase
{
        public function testSiteName()
        {
                $expected = config('name');
                $actual = siteName();
               $this->expectOutputString($expected);
        }
}
?>