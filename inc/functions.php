<?php
session_start();
unset($_POST);

$data = [
    'email' => '',
    'pass' => '',
];

if(!empty($_POST)){
    require_once 'db.php';
    $data = load($data);
    debug($data);
}

function load($data) {
    foreach($_POST as $k => $v) {
        if(array_key_exists($k, $data)) {
            $data[$k] =$v;
        }
    }
    return $data;
}

function debug($data) {
    echo '<pre>' . print_r($data, true) . '</pre>';
}