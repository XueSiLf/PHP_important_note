<?php

/**
 * PHP魔术方法-__toString()
 * 函数原型：public function __toString(void) : string
 *
 * __toString() 方法用于一个类的实例被当成字符串时应怎样回应。
 * 例如 echo $obj; 应该显示些什么。
 * 此方法必须返回一个字符串，否则将发出一条 E_RECOVERABLE_ERROR 级别的致命错误。
 * 【警告：不能在__toString()方法中抛出异常。这么做会导致致命错误。】
 *
 * 需要指出的是在 PHP 5.2.0 之前，__toString() 方法只有在直接使用于 echo 或 print 时才能生效。
 * PHP 5.2.0 之后，则可以在任何字符串环境生效（例如通过 printf()，使用 %s 修饰符），
 * 但不能用于非字符串环境（如使用 %d 修饰符）。
 * 自 PHP 5.2.0 起，如果将一个未定义 __toString() 方法的对象转换为字符串，会产生 E_RECOVERABLE_ERROR 级别的错误。
 *
 * 用法 陷阱 警告
 *
 * Declare a simple class
 * Class classA
 */
class classA
{
    public $foo;
    public function __construct($foo)
    {
        $this->foo = $foo;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->foo;
    }
}
$classa = new classA('hello');
echo $classa;

//$str = 'aa';
//$num = 10;
//printf('%s', $str);// aa
//printf('%d', $num);// 10