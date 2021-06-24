<?php namespace Mossengine\Helpers;

/**
 * Class Statements
 * @package Mossengine\Helpers
 */
class Statements {

    /**
     * @return string
     */
    public static function self(): string
    {
        return self::class;
    }

    /**
     * @param $mixedLeft
     * @param string $operator
     * @param $mixedRight
     * @return bool
     */
    public static function is($mixedLeft, string $operator, $mixedRight) : bool {
        return call_user_func_array(
            [
                self::class,
                Arrays::get(
                    [
                        '==' => 'isLike',
                        '===' => 'isSame',
                        '!=' => 'isNotLike',
                        '!==' => 'isNotSame',
                        '>' => 'isMore',
                        '>=' => 'isMoreOrSame',
                        '<' => 'isLess',
                        '<=' => 'isLessOrSame'
                    ],
                    $operator,
                    'isAlwaysFalse'
                )
            ],
            [$mixedLeft, $mixedRight]
        );
    }

    /**
     * @return true
     */
    public static function isAlwaysTrue() : bool {
        return true;
    }

    /**
     * @return false
     */
    public static function isAlwaysFalse() : bool {
        return false;
    }

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function isLike($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft == $mixedRight);
    }

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function isSame($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft === $mixedRight);
    }

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function isNotLike($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft != $mixedRight);
    }

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function isNotSame($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft !== $mixedRight);
    }

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function isMore($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft > $mixedRight);
    }

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function isMoreOrSame($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft >= $mixedRight);
    }

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function isLess($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft < $mixedRight);
    }

    /**
     * @param $mixedLeft
     * @param $mixedRight
     * @return bool
     */
    public static function isLessOrSame($mixedLeft, $mixedRight) : bool {
        return ($mixedLeft <= $mixedRight);
    }

}