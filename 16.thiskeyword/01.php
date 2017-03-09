<?php
/**
 * Created by Administrator.
 * Date: 2017/2/27
 */

//  创建Person类
class Person{
    private $name;
    private $workyear;
//    private $salary;

    public function __construct($name,$workyear){
        $this->name = $name;
        $this->workyear = $workyear;
    }

    public function getName(){
        return $this->name;
    }

    public function getWorkYear(){
        return $this->workyear;
    }

    public function getSalary(){
        $workyear = $this->workyear;
        if($workyear<2){
            $salary = 2000;
        }else if($workyear<4&&$workyear>2){
            $salary = 3000;
        }else if($workyear>4){
            $salary = 4000;
        }
        return $salary;
    }
}

$lisi = new Person('lisi',3);
echo '员工'.$lisi->getName().'工龄为：'.$lisi->getWorkYear().'年<br/>';
echo '员工'.$lisi->getName().'工资为：'.$lisi->getSalary().'<br/>';
