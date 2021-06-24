<?php namespace Mossengine;

/**
 * Class Helper
 * @package Mossengine
 */
class Helper {

    /**
     * @param string $stringHelper
     * @param array $arrayArguments
     * @return false|mixed
     */
    public static function __callStatic(string $stringHelper, array $arrayArguments) {
        return call_user_func(
            [
                'Mossengine\\Helpers\\' . ucfirst(strtolower($stringHelper)),
                'self'
            ]
        );
    }

}