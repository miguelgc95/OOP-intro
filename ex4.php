<?php

//Exercise 4
class Device
{
    public string $model;
    public int $serialNo;
    public int $id;

    public function __construct($model, $serialNo, $id)
    {
        $this->model = $model;
        $this->serialNo = $serialNo;
        $this->id = $id;
    }
    public function getSerialNo()
    {
        echo $this->$serialNo;
    }
    public function getId()
    {
        echo $this->id;
    }
    public function turnOn()
    {
        echo "turning device on";
    }
}

interface DeviceRepository{
    public function create(Device $device);
    public function findById($deviceId);
}

class MemoryRepository implements DeviceRepository{
    public array $storage;

    public function __construct($storage)
    {
        $this->storage = $storage;
    }
    public function create(Device $device){
        array_push($this->storage, $device);
    }
    public function findById($deviceId){
        $theDevice = false;
        foreach($this->storage as $device){
            if($device->id == $device){
                $theDevice = $device;
            }
        }
    return $theDevice;
    }
}

class DeviceManager{
    public function addDevice(MemoryRepository $repository, Device $device){
        $repository->create($device);
    }
}

$myDevice1 = new Device("pako", 999, 1);
print_r($myDevice1);
$myDevice2 = new Device("manolo", 222, 2);
$storage = array();
$myMemoryRepo = new MemoryRepository($storage);

print_r($myMemoryRepo->storage);
echo "<br>";

$myManager = new DeviceManager();
$myManager->addDevice($myMemoryRepo, $myDevice1);

print_r($myMemoryRepo->storage);
echo "<br>";

$myManager->addDevice($myMemoryRepo, $myDevice2);

print_r($myMemoryRepo->storage);
echo "<br>";
