<?php
/**
 * Created by PhpStorm.
 * User: THARANGA-PC
 * Date: 4/16/2015
 * Time: 11:26 AM
 */
$urlParams = explode('/', $_SERVER['REQUEST_URI']);
$functionName = $urlParams[3];
function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}
function baseUrl(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
if(function_exists($functionName)){
    $functionName();
}else{
    //echo 'http://localhost/ajf/api.php/index'.'\n';
    //var_dump("".baseUrl()."".'index');
    redirect("".baseUrl()."".'index');
}
