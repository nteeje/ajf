<?php

require('app/config/database.php');
include('sys/helpers/url_helper.php');

class users
{
    public $name;
    public $email;
    public $id;
}

function index()
{
    echo '<body style="background-color: #c0c0c0"><div style="padding: 15%"><h1 style="text-align: center">Welcome to Angular JS Framework Home.</h1></div></body>';
}

function user_list()
{
    global $db;
    $results = $db->select("users");
    $json = json_encode($results);
    echo $json;
}
