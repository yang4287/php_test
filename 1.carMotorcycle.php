<?php

//汽車和機車都是交通工具，共同擁有品牌、型號、啟動方式、停止方式、有輪子
//相差在汽車有門、有四個輪子；機車沒有門、只有兩個輪子

interface Vehicle
{
    public function getBrand();
    public function getModel();
    public function start();
    public function stop();
    public function hasWheels();
}


class Car implements Vehicle
{
    protected $brand;
    protected $model;
    protected $numberOfWheels = 4;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getBrand()
    {
        echo  $this->brand."\n";
    }

    public function getModel()
    {
        echo  $this->model."\n";
    }
    public function start()
    {
        echo  "啟動汽車\n";
    }
    public function stop()
    {
        echo  "停止汽車\n";
    }
    public function hasWheels()
    {
        echo true."\n";
    }
   
    public function getNumberOfWheels()
    {
        echo $this->numberOfWheels."\n";
    }
    public function hasDoor()
    {
        echo true."\n";
    }

}

class Motorcycle implements Vehicle
{
    protected $brand;
    protected $model;
    protected $numberOfWheels = 2;
    

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getBrand()
    {
        echo  $this->brand."\n";
    }

    public function getModel()
    {
        echo  $this->model."\n";
    }
    public function start()
    {
        echo  "啟動機車\n";
    }
    public function stop()
    {
        echo  "停止機車\n";
    }
    public function hasWheels()
    {
        echo true."\n";
    }

    public function getNumberOfWheels()
    {
        echo $this->numberOfWheels."\n";
    }
}

// 建立一個汽車物件
$car = new Car("toyota","altis");


$car->getBrand();
$car->getmodel();
$car->hasWheels();
$car->getNumberOfWheels();
$car->start();
$car->stop();
$car->hasDoor();


// 建立一個機車物件
$motorcycle = new Motorcycle("sym","woo 125");
$motorcycle->getBrand();
$motorcycle->getmodel();
$motorcycle->hasWheels();
$motorcycle->getNumberOfWheels();
$motorcycle->start();
$motorcycle->stop();
//機車沒有門，因此沒有hasdoor()

