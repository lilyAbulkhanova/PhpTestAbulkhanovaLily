<?php

require 'vendor/autoload.php';
require 'Database.php';
require 'UserHandler.php';

$db = new Database();
$userHandler = new UserHandler();

$userHandler->setUserValues();
$userHandler->setArticleValues();

$userId = 1;

echo $userHandler->getUsers();
echo PHP_EOL;
echo $userHandler->getUserArticles($userId);

