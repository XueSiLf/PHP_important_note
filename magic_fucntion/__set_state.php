<?php

/**
 * PHP魔术方法-__set_state
 * 函数原型：public static function __set_state(array $properties) : object
 *
 * 自 PHP 5.1.0 起当调用 var_export() 导出类时，此静态 方法会被调用。
 * 本方法的唯一参数是一个数组，其中包含按 array('property' => value, ...) 格式排列的类属性。
 *
 *
 * Class classA
 */
class classA
{
    public $var1;
    public $var2;

    public static function __set_state($an_array)
    {
        // TODO: Implement __set_state() method.
        $obj = new classA();
        $obj->var1 = $an_array['var1'];
        $obj->var2 = $an_array['var2'];
        return $obj;
    }
}