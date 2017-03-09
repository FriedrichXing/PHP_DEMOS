<?php
/**
 * Created by Administrator.
 * Date: 2017/2/28
 */

//  创建Person类
class Person{
    //  声明属性
    private $name;
    private $workyear;

    //  构造方法
    public function __construct($name,$workyear){
        $this->name = $name;
        $this->workyear = $workyear;
    }

    //  get方法访问name属性
    public function getName(){
        return $this->name;
    }

    //  get方法访问workyear属性
    public function getWorkyear(){
        return $this->workyear;
    }

    //  工资获得方法
    public function getSalary(){
        $workyear = $this->workyear;
        $salary = 0;
        switch($workyear){
            case 1:
                $salary = 1000;
                break;
            case 2:
                $salary = 2000;
                break;
            case 3:
                $salary = 3000;
                break;
            case 4:
                $salary = 4000;
                break;
        }
        return $salary;
    }

}

$sensen = new Person('sensen',3);
echo '员工'.$sensen->getName().'工龄为：'.$sensen->getWorkyear().'年<br/>';
echo '员工'.$sensen->getName().'工资为：'.$sensen->getSalary().'<br/>';