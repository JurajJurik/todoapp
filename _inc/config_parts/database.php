<?php 
use Medoo\Medoo;

// connect to db

$database = new Medoo([
    'database_type' => 'mysql',
    'server' => 'localhost',
    'database_name' => 'todo',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8'
]);
