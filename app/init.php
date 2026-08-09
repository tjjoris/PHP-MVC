<?php
//init.php
require_once __DIR__ . '/../vendor/autoload.php';
//use Dotenv\Dotenv;

//load .env once application starts.
//$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
//$dotenv->load();

//require two core classes needed
require_once __DIR__ . '/core/App.php';
require_once __DIR__ . '/core/Controller.php';
require_once __DIR__ . '/models/Model.php';
