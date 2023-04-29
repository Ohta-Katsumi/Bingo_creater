<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    file_put_contents("bingo.json",file_get_contents('php://input'));
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $json =  file_get_contents("bingo.json");
    echo $json;
}

