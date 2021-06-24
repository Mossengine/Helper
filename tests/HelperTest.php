<?php

use Mossengine\Helper;

/**
 * Class HelperTest
 */
class HelperTest extends PHPUnit_Framework_TestCase
{

    public function testIfArrayIsAssociative() {
        $this->assertTrue(
            Helper::arrays()::isAssociative(['a' => 'A'])
        );
    }
    public function testIfNotArrayIsAssociative() {
        $this->assertFalse(
            Helper::arrays()::isAssociative(['a','b'])
        );
    }
    public function testIfArrayHas() {
        $this->assertTrue(
            Helper::arrays()::has(['a' => 'A'], 'a')
        );
    }
    public function testIfNotArrayHas() {
        $this->assertFalse(
            Helper::arrays()::has(['b' => 'B'], 'a')
        );
    }
    public function testIfArrayGet() {
        $this->assertEquals(
            'A',
            Helper::arrays()::get(['a' => 'A'], 'a')
        );
    }
    public function testIfNotArrayGet() {
        $this->assertNotEquals(
            'A',
            Helper::arrays()::get(['b' => 'B'], 'a', 'default')
        );
    }
    public function testIfArraySet() {
        $array = [];
        Helper::arrays()::set($array, 'a', 'A');
        $this->assertEquals(
            [
                'a' => 'A'
            ],
            $array
        );
    }
    public function testIfNotArraySet() {
        $array = [];
        Helper::arrays()::set($array, 'a', 'A');
        $this->assertNotEquals(
            [
                'b' => 'B'
            ],
            $array
        );
    }
    public function testIfArrayForget() {
        $array = [
            'a' => 'A',
            'b' => 'B',
            'c' => 'C'
        ];
        Helper::arrays()::forget($array, 'b');
        $this->assertEquals(
            [
                'a' => 'A',
                'c' => 'C'
            ],
            $array
        );
    }
    public function testIfNotArrayForget() {
        $array = [
            'a' => 'A',
            'b' => 'B',
            'c' => 'C'
        ];
        Helper::arrays()::forget($array, 'z');
        $this->assertNotEquals(
            [
                'a' => 'A',
                'c' => 'C'
            ],
            $array
        );
    }
    public function testIfArrayEvery() {
        $this->assertTrue(
            Helper::arrays()::every(
                [
                    1,
                    2,
                    3,
                    4
                ],
                function ($value) {
                    return $value > 0;
                }
            )
        );
    }
    public function testIfNotArrayEvery() {
        $this->assertFalse(
            Helper::arrays()::every(
                [
                    1,
                    2,
                    -1,
                    4
                ],
                function ($value) {
                    return $value > 0;
                }
            )
        );
    }
    public function testIfArraySome() {
        $this->assertTrue(
            Helper::arrays()::some(
                [
                    1,
                    -1,
                    3,
                    4
                ],
                function ($value) {
                    return $value > 0;
                }
            )
        );
    }
    public function testIfNotArraySome() {
        $this->assertFalse(
            Helper::arrays()::some(
                [
                    -1,
                    -2,
                    -1,
                    -4
                ],
                function ($value) {
                    return $value > 0;
                }
            )
        );
    }
    public function testIfArrayFirstKey() {
        $this->assertEquals(
            'a',
            Helper::arrays()::firstKey(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfNotArrayFirstKey() {
        $this->assertNotEquals(
            'b',
            Helper::arrays()::firstKey(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfArrayNthKey() {
        $this->assertEquals(
            'b',
            Helper::arrays()::nthKey(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ],
                2
            )
        );
    }
    public function testIfNotArrayNthKey() {
        $this->assertNotEquals(
            'c',
            Helper::arrays()::nthKey(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ],
                2
            )
        );
    }
    public function testIfArrayNthKeyOutOfRange() {
        $this->assertEquals(
            'd',
            Helper::arrays()::nthKey(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ],
                4,
                'd'
            )
        );
    }
    public function testIfArrayLastKey() {
        $this->assertEquals(
            'c',
            Helper::arrays()::lastKey(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfNotArrayLastKey() {
        $this->assertNotEquals(
            'a',
            Helper::arrays()::lastKey(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfArrayFirstValue() {
        $this->assertEquals(
            'A',
            Helper::arrays()::firstValue(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfNotArrayFirstValue() {
        $this->assertNotEquals(
            'B',
            Helper::arrays()::firstValue(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfArrayNthValue() {
        $this->assertEquals(
            'B',
            Helper::arrays()::nthValue(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ],
                2
            )
        );
    }
    public function testIfNotArrayNthValue() {
        $this->assertNotEquals(
            'C',
            Helper::arrays()::nthValue(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ],
                2
            )
        );
    }
    public function testIfArrayNthValueOutOfRange() {
        $this->assertEquals(
            'D',
            Helper::arrays()::nthValue(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ],
                4,
                'D'
            )
        );
    }
    public function testIfArrayLastValue() {
        $this->assertEquals(
            'C',
            Helper::arrays()::lastValue(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfNotArrayLastValue() {
        $this->assertNotEquals(
            'A',
            Helper::arrays()::lastValue(
                [
                    'a' => 'A',
                    'b' => 'B',
                    'c' => 'C'
                ]
            )
        );
    }
    public function testIfIs() {
        foreach (
            [
                [1, '==', '1'],
                [1, '!=', '2'],
                [1, '===', 1],
                [1, '!==', 2],
                [2, '>', 1],
                [3, '>=', 3],
                [5, '<', 6],
                [4, '<=', 4]
            ]
            as $arrayTest
        ) {
            $this->assertTrue(
                Helper::Statements()::is(
                    $arrayTest[0],
                    $arrayTest[1],
                    $arrayTest[2]
                )
            );
        }
    }
    public function testIfNotIs() {
        foreach (
            [
                [1, '==', '2'],
                [1, '!=', '1'],
                [1, '===', 2],
                [1, '!==', 1],
                [1, '>', 2],
                [2, '>=', 3],
                [6, '<', 5],
                [5, '<=', 4]
            ]
            as $arrayTest
        ) {
            $this->assertFalse(
                Helper::Statements()::is(
                    $arrayTest[0],
                    $arrayTest[1],
                    $arrayTest[2]
                )
            );
        }
    }
    public function testIfIsInvalid() {
        $this->assertFalse(
            Helper::Statements()::is(
                1,
                'banana',
                1
            )
        );
    }
    public function testIfIsAlwaysTrue() {
        $this->assertTrue(
            Helper::Statements()::isAlwaysTrue()
        );
    }
    public function testIfIsAlwaysFalse() {
        $this->assertFalse(
            Helper::Statements()::isAlwaysFalse()
        );
    }

}