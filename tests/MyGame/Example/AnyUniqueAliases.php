<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace MyGame\Example;

class AnyUniqueAliases
{
    const NONE = 0;
    const M = 1;
    const T = 2;
    const M2 = 3;

    private static $names = array(
        "NONE",
        "M",
        "T",
        "M2",
    );

    public static function Name($e)
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}