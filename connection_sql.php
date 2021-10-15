<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// $servername = 'localhost';
// $username = 'root';
// $password = '1234';
// $port = 3306;
// $dbname = '';


$servername = '162.252.83.203';
$username = 'quotrolk';
$password = 'SaGaRa4000';
$port = 3306;
$dbname = 'quotrolk_retouchnow';



$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


