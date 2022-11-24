<?php

require 'Connection/Connection.php';
require 'NewUser/CreateUser.php';
require 'NewUser/ValidationUser.php';
require 'NewUser/SendUserToDB.php';


$newUser = new CreateUser();
$send = new SendUserToDB();
$valid = new ValidationUser();


$newUser->setName($_POST['name']);
$newUser->setCity($_POST['city']);
$newUser->setDate($_POST['date']);
$newUser->setLastName($_POST['lastName']);
$newUser->setSex($_POST['sex']);

$name = $newUser->getName();
$lastName = $newUser->getLastName();
$date = $newUser->getDate();
$city = $newUser->getCity();
$sex = $newUser->getSex();

$valid->valDate($date);
$valid->valSex($sex);
$valid->valCity($city);
$valid->vallastName($lastName);
$valid->valName($name);
$valid->getResultOfVal();

$send->CheckName(Connection::getInstance()->getConnect(), $name);
$send->sendToDB($lastName,$date,$city,$name,$sex,Connection::getInstance()->getConnect());











