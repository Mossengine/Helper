<?php

use Mossengine\Helper;

/**
 * Class HelperTest
 */
class HelperTest extends PHPUnit_Framework_TestCase
{

    public function testIfTest() {
        $this->assertEquals(
            [null, 'abc', 45, 1.234, ['a' => 'A'], (object) ['b' => 'B']],
            Helper::Test()::Test(null, 'abc', 45, 1.234, ['a' => 'A'], (object) ['b' => 'B'])
        );
    }

}