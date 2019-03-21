<?php

use PHPUnit\Framework\TestCase;
require_once "../samplephpwebsite/functions.php";

class Test extends TestCase
{
        public function testSiteName()
        {
                $expected = echo config('name');
                $actual = siteName();
                $this->assertEquals($expected, $actual);
        }
}
?>