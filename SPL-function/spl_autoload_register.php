<?php

/**
 * 作用：使用这个函数激活一个函数来实现自动加载类。
 *
 * spl_autoload_register — 注册给定的函数作为 __autoload 的实现
 * 函数原型spl_autoload_register([callable $autoload_function [, bool $throw = true [, bool $prepend = false ]]] ) : bool
 * $autoload_function : 欲注册的自动装载函数。如果没有提供任何参数，则自动注册 autoload 的默认实现函数spl_autoload()。
 * $throw : 此参数设置了autoload_function 无法注册成功时，spl_autoload_register()是否抛出异常。
 * $prepend : 如果是true，spl_autoload_register() 会添加函数到队列之首，而不是队列尾部。
 * 返回值：成功时返回 TRUE， 或者在失败时返回 FALSE。
 */


/**
 * 示例1： spl_autoload_register()作为__autoload()函数的替代
 */
# 从php 7.2.0开始，此功能已被弃用。不鼓励依赖此功能。
# __autoload()从PHP 7.2.0 已经废弃
//function __autoload($class) {
//    include 'classes/' . $class . '.class.php';
//}

// 以下两步等价于上面的
#function my_autoloader($class) {
#    include 'classes/' . $class . '.class.php';
#}
//使用spl_autoload_register() 激活一个自定义函数来实现类的自动加载
#spl_autoload_register('my_autoloader');


// 或者,自从 PHP 5.3.0起可以使用匿名函数
//spl_autoload_register(function($class){
//    include 'classes' . $class . '.class.php';
//});

#$cat = new Cat();



/**
 * 示例2：class 未能加载的 spl_autoload_register() 例子
 */
# namespace Foobar;
class Foo {
    static public function test($name) {
        print '[[' . $name . ']]';
    }
}
// 激活当前命名空间下的类的静态方法作为自动加载函数
# spl_autoload_register(__NAMESPACE__ . '\Foo::test');
# new IndexstentClass;// 报错
//结果类似
//[[Foobar\InexistentClass]]
//Fatal error: Class 'Foobar\InexistentClass' not found in ...

# spl_autoload_register('Foo::test');//错误的方式 必须带命名空间


/**
 * 示例3：传入数组进行加载
 */
class classA
{
    public function myFun()
    {
        echo '111';
    }
}
spl_autoload_register(array('classA', 'myFun'));

$classa = new classB();
# 这里是会调用myFun函数的，说明可以传入一个数组

