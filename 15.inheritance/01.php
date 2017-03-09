<?php
/**
 * Created by Administrator.
 * Date: 2017/2/25
 */

//  父类
class Animal{
    public $name = 'Animal';

    public function shout(){
        echo '动物会叫。<br/>';
    }
}

//  子类
class Dog extends Animal{
    public $owner = 'xing';

    public function swim(){
        echo '狗会游泳。<br/>';
    }
}

$dog = new Dog();
echo '名字：'.$dog->name.'<br/>';
echo '改名：'.$dog->name='dog'.'<br/>';
echo $dog->swim();