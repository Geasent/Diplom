<?php
require_once 'rb.php';

$db = [
    'dsn' => '127.0.0.1:3306;dbname=4pi4;charset=utf8',
    'user' => 'root',
    'pass' => '2811301102gG',
];

R::setup($db['dsn'],$db['user'],$db['pass']);
R::freeze(true);