<?php

$data = ['name' => 'Andi'];
$hashValue = hash('md5', $data['name']);

setcookie('head', $hashValue);

?>