<?php
/**
 * Created by PhpStorm.
 * User: THARANGA-PC
 * Date: 4/16/2015
 * Time: 10:35 AM
 */
echo 'Thara';
$urlParams = explode('/', $_SERVER['REQUEST_URI']);
$functionName = $urlParams[2];
$functionName($urlParams);

function func1 ($urlParams=null) {
    echo "In func1";
}

function func2 ($urlParams=null) {
    echo "In func2";
    echo "<br/>Argument 1 -> ".$urlParams[3];
    echo "<br/>Argument 2 -> ".$urlParams[4];
}