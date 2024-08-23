<?php
namespace Structural\Bridge;
require_once __DIR__ . '/../../vendor/autoload.php';



echo "----------------------Tv------------------------<br>";

$tv = new Tv();
$remote = new RemoteControl($tv);
$tv->setVolume(50);

echo 'channel '. $tv->getChannel();
echo "<br>";
echo 'volume'.$tv->getVolume();
echo "<br>";
echo 'is enabled ' .$tv->isEnabled();
$remote->togglePower();
echo  'is enabled ' .$tv->isEnabled();
echo "<br>";
$remote->volumeUp();
echo 'volume up ' .$tv->getVolume();
echo "<br>";
$remote->volumeDown();
echo 'volume down ' .$tv->getVolume();
echo "<br>";
echo 'channel ' . $remote->GetChannel();
echo "<br>";

echo "----------------------Radio------------------------<br>";
$radio = new Radio();
$remotee = new RemoteControl($radio);
$radio->setVolume(50);
echo 'channel '. $radio->getChannel();
echo "<br>";
echo 'volume'.$radio->getVolume();
echo "<br>";
echo 'is enabled ' .$radio->isEnabled();
$remotee->togglePower();
echo  'is enabled ' .$radio->isEnabled();
echo "<br>";
$remote->volumeUp();
echo 'volume up ' .$radio->getVolume();
echo "<br>";
$remote->volumeUp();
echo 'volume up ' .$radio->getVolume();
echo "<br>";
$remotee->volumeDown();
echo 'volume down ' .$radio->getVolume();
echo "<br>";
echo 'channel ' . $remotee->GetChannel();
echo "<br>";

