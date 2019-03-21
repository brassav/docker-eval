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

        public function testPageContent()
        {
                $page = isset($_GET['page']) ? $_GET['page'] : 'home';

                if ($page == '/') $page = 'home';

                $path = getcwd() . '/' . config('content_path') . '/' . $page . '.php';

                if (file_exists(filter_var($path, FILTER_SANITIZE_URL))) {
                       $expected =  include $path;
                } else {
                       $expected =  include config('content_path') . '/404.php';
                }
                $actual = pageContent();
                $this->expectOutputString($expected);
        }

        public function testRun()
        {
                $expected = include config('template_path').'/templat e .php';

                $actual = pageContent();
                $this->expectOutputString($expected);
        }
}
 