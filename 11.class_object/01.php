<?php
/**
 * Created by Administrator.
 * Date: 2017/2/25
 */
class Person{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    public function say(){
        echo '姓名：'.$this->name.'<br/>年龄：'.$this->age.'<br/>';
    }


    public function __destruct(){
        echo '对象销毁<br/>';
    }

}


$ewen = new Person('ewen',21);
echo $ewen->say();
echo '<hr/>';