<?php

use PHPUnit\Framework\TestCase;

require "samplephpwebsite/*";
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

        public function testSiteVersion()
        {
                $expected = config('version');
                $actual = siteVersion();
                $this->expectOutputString($expected);
        }

        public function testNavMenu()
        {
                $nav_menu = '';
                $sep = ' | ';

                foreach (config('nav_menu') as $uri => $name) {
                        $nav_menu .= '<a href="/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri . '">' . $name . '</a>' . $sep;
                }

                $expected = trim($nav_menu, $sep);
                
                $actual = navMenu();
                $this->expectOutputString($expected);
        }

        public function testPageTitle()
        {
                $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';
                if ($page == '/') $page = 'home';

                $expected =  ucwords(str_replace('/', '', str_replace('-', ' ', $page)));
                
                $actual = pageTitle();
                $this->expectOutputString($expected);
        }
}
 