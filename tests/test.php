<?php

use PHPUnit\Framework\TestCase;
require_once "../samplephpwebsite/functions";

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