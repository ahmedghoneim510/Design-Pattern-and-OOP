<?php
require_once __DIR__.'/../vendor/autoload.php';
use App\OOP\BMW;
use App\OOP\Mercedes;


$obj= new BMW(100,4,'red','automatic');
$merceds=new Mercedes(100,4,'red','automatic');
$order=new \App\OOP\Order("Nairobi","Mombasa",100);
$truckXT= new \App\OOP\TruckXT(100,4,'red','automatic');
$dash= new \App\OOP\CarDashboard("50","400","100");
$obj->installDashboard($dash);
echo $obj->CarInfo();
echo $order->deliverOrder($truckXT  );
echo "<pre>";
print_r($obj);
echo "</pre>";