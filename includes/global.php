<?php
session_start ();

function conexao (){
    $user = "root";
    $passwd = "usbw";
    $dbname = "estoque";    
    $host = "127.0.0.1:3307";
    $pdo = new PDo("mysql:host={$host};dbname={$dbname}", $user, $passwd);
    return $pdo;
}