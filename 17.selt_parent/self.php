<?php
/**
 * Created by Administrator.
 * Date: 2017/2/27
 */

/**
 * self::调用静态常量或者静态方法
 */

class Person{
    private $name;
    private static $age;

    public function __construct($name,$age)
    {
        $this->name = $name;
        self::$age = $age;
    }

    public function intro(){
        echo 'my name is '.$this->name.'<br/>';
        echo 'i am '.self::$age.' years old<br/>';
    }

}


$lisi = new Person('lisi',30);
$lisi->intro();