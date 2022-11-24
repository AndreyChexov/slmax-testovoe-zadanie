<?php
require 'Connection/Connection.php';
require 'ListUsers/UserList.php';
require 'NewUser/SendUserToDB.php';

$list = new UserList();
$send = new SendUserToDB();

$send->getAge($_POST['birth']);
$list->setListUsers(Connection::getInstance()->getConnect());
$userList = $list->getListUsers();
$list->delUser(Connection::getInstance()->getConnect());