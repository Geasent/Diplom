<?php
session_start();

$data = [
    'email' => '',
    'pass' => '',
];

if(!empty($_POST)){
    require_once 'db.php';

}

function