<?php
/**
 * Created by PhpStorm.
 * User: THARANGA-PC
 * Date: 4/16/2015
 * Time: 10:07 AM
 */

// set up the connection variables
$db_name = 'testdb';
$hostname = '127.0.0.1';
$username = 'root';
$password = '';
//global $dbh;
// connect to the database
$dbh = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password);