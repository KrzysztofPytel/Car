<?php
include('class.Car.php');

$model = 'Fiat126P';
$Car = new Car($model, 200);
$vMax = $Car->getVMax();
$Acc = $Car->getAcceleration();

echo('<center><b>Model: ');
echo $model;
echo ('<br>VMax: ');
echo $vMax;
echo ('<br>Przyspieszenie: ');
echo $Acc;
echo ('</b></center>');
