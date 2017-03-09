<?php

/**
 * Created by Administrator.
 * Date: 2017/2/27
 */

/**
 * parent::调用父类的方法
 */

class Person
{
    private $age = 22;

    public function getAge()
    {
        echo $this->age . '<br/>';
    }
}

class Stu extends Person
{
    public function intro()
    {
        //  调用父类的getAge方法
        parent::getAge();
    }
}

$lisi = new Stu();
$lisi->intro();