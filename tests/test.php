<?php

use PHPUnit\Framework\TestCase;
require "../samplephpwebsite/functions.php";

class Test extends TestCase
{
        public function testSiteName()
        {
                $expected = config('name');
                $actual = siteName();
                $this->assertEquals($expected, $actual);
        }
}
?>