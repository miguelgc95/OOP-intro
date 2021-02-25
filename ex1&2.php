<?php


//Exercise 1
class Device
{
    public string $model;
    public int $serialNumber;

    public function getSerialNumber()
    {
        echo $this->$serialNumber;
    }
    public function turnOn()
    {
        echo "turning device on";
    }
}

//Exercise 2
class Mobile extends Device
{
    public int $simNumber;

    public function getSimNumber()
    {
    echo $this->$simNumber;
    }
}

class Tablet
{
    public string $padName;

    public function getPadName()
    {
    echo $this->$padName;
    }
}

class DeviceManager{
    public function getDeviceSerialNumber(Device $device){
        $device->getSerialNumber();
    }
}