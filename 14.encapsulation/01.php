<?php
/**
 * Created by Administrator.
 * Date: 2017/2/25
 */

class Person{
    public $username;
    private $age;

    public function __construct($username,$age){
        $this->username = $username;
        $this->age = $age;
    }

    public function sayAge(){
        return $this->age;
    }

    public function setAge($age=11){
        $this->age = $age;
    }

}

$xing = new Person('xing',23);
echo '姓名：'.$xing->username.'<br/>';
echo '姓名改为：'.$xing->username='www'.'<br/>';

//echo '年龄：'.$xing->age;  //  错误
echo '年龄：'.$xing->sayAge().'<br/>'; //  错误

$xing->setAge(22);
echo 'setAge改年龄：'.$xing->sayAge().'<br/>';