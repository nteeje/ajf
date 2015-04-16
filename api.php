<?php
include('app/config/database.php');
include('sys/helpers/url_helper.php');

class users
{
    public $name;
    public $email;
    public $id;

}

function index(){
echo '<body style="background-color: #c0c0c0"><div style="padding: 15%"><h1 style="text-align: center">Welcome to Angular JS Framework Home.</h1></div></body>';
}

function func1($urlParams = null)
{
    echo "In func1";
}

function get_list()
{
    global $dbh;
    $sql = 'SELECT id, name, email FROM users';

// use prepared statements, even if not strictly required is good practice
    $stmt = $dbh->prepare($sql);

// execute the query
    $stmt->execute();

// fetch the results into an array

    $result = $stmt->fetchAll(PDO::FETCH_CLASS, "users");

// convert to json
    // convert to json
    $json = json_encode($result);

// echo the json string
    echo $json;
}
