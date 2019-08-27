<?php

/**
 * PHP魔术方法-__invoke()
 * 函数原型：function __invoke([$...]) : mixed
 * 当尝试以调用函数的方式调用一个对象时，__invoke() 方法会被自动调用。
 * 【本特性只在 PHP 5.3.0 及以上版本有效。 】
 *
 *
 *
 * Class classA
 */
class classA
{
    function __invoke($x)
    {
        // TODO: Implement __invoke() method.
        echo '你把这个类的对象当函数调用了';
        var_dump($x);
    }
}
$obj = new classA();
$obj(2);// int 2
var_dump(is_callable($obj));//true