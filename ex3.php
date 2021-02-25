<?php


//Exercise 1
abtract class Device
{
    public string $model;
    public int $serialNo;
    public int $id;

    public function getSerialNo()
    {
        echo $this->$serialNo;
    }
    public function getId()
    {
        echo $this->$id;
    }
    public function turnOn()
    {
        echo "turning device on";
    }
    abstract function getDetail($deviceId)
    {
    }
}

class Mobile extends Device
{
    public int $simNumber;

    public function getSimNumber()
    {
    echo $this->$simNumber;
    }
    function getDetail($deviceId)
    {
        echo "the details of the mobile are: " . $this->$deviceId;
    }
}

class Tablet
{
    public string $padName;

    public function getPadName()
    {
    echo $this->$padName;
    }
    function getDetail($deviceId)
    {
        echo "the details of the tablet are: " . $this->$deviceId;
    }
}
