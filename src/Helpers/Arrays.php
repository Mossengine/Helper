<?php namespace Mossengine\Helpers;

use Illuminate\Support\Arr;

/**
 * Class Arrays
 * @package Mossengine\FiveCode\Helpers
 */
class Arrays {

    /**
     * @return string
     */
    public static function self() : string {
        return self::class;
    }

    /**
     * @param array $array
     * @return bool
     */
    public static function isAssociative(array $array) : bool {
        return (
            !([] === $array)
            && array_keys($array) !== range(0, count($array) - 1)
        );
    }

    /**
     * @param array $array
     * @param $stringPath
     * @return bool
     */
    public static function has(array $array, $stringPath) : bool {
        return Arr::has($array, $stringPath);
    }

    /**
     * @param $array
     * @param $stringPath
     * @param null $mixedDefault
     * @return array|\ArrayAccess|mixed
     */
    public static function get($array, $stringPath, $mixedDefault = null) {
        return (
        !is_array($array)
        || !Arr::has($array, $stringPath)
            ? $mixedDefault
            : Arr::get($array, $stringPath, $mixedDefault)
        );
    }

    /**
     * @param array $array
     * @param $stringPath
     * @param $mixedValue
     * @return array
     */
    public static function set(array &$array, $stringPath, $mixedValue) : array {
        return Arr::set($array, $stringPath, $mixedValue);
    }

    /**
     * @param array $array
     * @param $stringPath
     */
    public static function forget(array &$array, $stringPath) {
        Arr::forget($array, $stringPath);
    }

    /**
     * @param array $array
     * @param callable|null $callable
     * @return bool
     */
    public static function every(array $array, callable $callable = null) : bool {
        foreach ($array as $key => $item) {
            if (
                (
                    is_callable($callable)
                    && !call_user_func($callable, $item, $key)
                )
                || (
                    !is_callable($callable)
                    && !$item
                )
            ) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param array $array
     * @param callable $callable
     * @return bool
     */
    public static function some(array $array, callable $callable) : bool {
        foreach ($array as $key => $item) {
            if (
                (
                    is_callable($callable)
                    && call_user_func($callable, $item, $key)
                )
                || (
                    !is_callable($callable)
                    && $item
                )
            ) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param array $array
     * @param null $mixedDefault
     * @return false|mixed|null
     */
    public static function firstKey(array $array, $mixedDefault = null) {
        return self::nthKey($array, 1, $mixedDefault);
    }

    /**
     * @param array $array
     * @param int $intKeyPosition
     * @param null $mixedDefault
     * @return array|\ArrayAccess|mixed|null
     */
    public static function nthKey(array $array, int $intKeyPosition = 1, $mixedDefault = null) {
        return self::get(array_keys($array), ($intKeyPosition - 1), $mixedDefault);
    }

    /**
     * @param array $array
     * @param null $mixedDefault
     * @return false|mixed|null
     */
    public static function lastKey(array $array, $mixedDefault = null) {
        return self::nthKey($array, count($array), $mixedDefault);
    }

    /**
     * @param array $array
     * @param null $mixedDefault
     * @return false|mixed|null
     */
    public static function firstValue(array $array, $mixedDefault = null) {
        return self::nthValue($array, 1, $mixedDefault);
    }

    /**
     * @param array $array
     * @param int $intKeyPosition
     * @param null $mixedDefault
     * @return array|\ArrayAccess|mixed|null
     */
    public static function nthValue(array $array, int $intKeyPosition = 1, $mixedDefault = null) {
        return self::get(array_values($array), ($intKeyPosition - 1), $mixedDefault);
    }

    /**
     * @param array $array
     * @param null $mixedDefault
     * @return false|mixed|null
     */
    public static function lastValue(array $array, $mixedDefault = null) {
        return self::nthValue($array, count($array), $mixedDefault);
    }

}