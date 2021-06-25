<?php namespace Mossengine;

/**
 * Class Helper
 * @package Mossengine
 */
class Helper {

    /**
     * @var null|string
     */
    private $stringClass;

    /**
     * Helper constructor.
     * @param string $stringClass
     */
    public function __construct(string $stringClass) {
        $this->stringClass = $stringClass;
    }

    /**
     * @param string $stringClass
     * @param array $arrayArguments
     * @return Helper
     */
    public static function __callStatic(string $stringClass, array $arrayArguments) {
        return new self($stringClass);
    }

    /**
     * @param string $stringMethod
     * @param array $arrayArguments
     * @return false|mixed|string
     */
    public function __call(string $stringMethod, array $arrayArguments) {
        return call_user_func_array(
            [
                'Mossengine\\Helpers\\_' . $this->stringClass . '\\_' . $stringMethod,
                '_' . $stringMethod
            ],
            $arrayArguments
        );
    }

}