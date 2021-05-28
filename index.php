<?php

// This is my controller for the Final project

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require autoload file
require_once ('vendor/autoload.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/../config_trees.php');

//Start a session
session_start();

//Connect to db
try {
    //Instantiate a PDO database object
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    echo "Connected to database!";
}
catch(PDOException $e) {
    echo $e->getMessage();
    die("Shoot! We're having connection issues");
}

// Instantiate Fat-Free
$f3 = Base::instance();
$con = new Controller($f3);
//$dataLayer = new DataLayer($dbh);//Save this for when we create datalayer file

// Define default route
$f3->route('GET /', function(){
    // Display the home page
    $GLOBALS['con']->home();
});

// Define results route
$f3->route('GET /results', function(){
    $GLOBALS['con']->results();
});

// Define signup route
$f3->route('GET|POST /signup', function($f3){
    $GLOBALS['con']->signup();
});

// Define summary route
$f3->route('GET /summary', function(){
    $GLOBALS['con']->summary();
});

// Define login route
$f3->route('GET /login', function(){
    $GLOBALS['con']->login();
});

// Define admin route
$f3->route('GET /admin', function(){
    $GLOBALS['con']->admin();
});

// Define user page route
$f3->route('GET /user', function(){
    $GLOBALS['con']->user();
});

// Run Fat-Free
$f3->run();
