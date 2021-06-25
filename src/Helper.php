<?php namespace Mossengine;

/**
 * Class Helper
 * @package Mossengine
 */
class Helper {

    /**
     * @var null|string
     */
    private static $class = null;

    /**
     * @param string $stringClassOrMethod
     * @param array $arrayArguments
     * @return false|mixed|string
     */
    public static function __callStatic(string $stringClassOrMethod, array $arrayArguments) {
        if (null !== self::$class) {
            $stringClass = self::$class;
            self::$class = null;
            return forward_static_call_array(
                [
                    'Mossengine\\Helpers\\_' . $stringClass . '\\_' . $stringClassOrMethod,
                    '_' . $stringClassOrMethod
                ],
                $arrayArguments
            );
        }
        self::$class = $stringClassOrMethod;

        return self::class;
    }

}