<?php

// This is my controller for the Final project

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require autoload file
require_once ('vendor/autoload.php');

// Instantiate Fat-Free
$f3 = Base::instance();

// Define default route
$f3->route('GET /', function(){
    // Display the home page
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET /results', function(){
    //Display the results page
    $view = new Template();
    echo $view->render('views/results.html');
});

$f3->route('GET /login', function(){
    //Display the login page
    $view = new Template();
    echo $view->render('views/login.html');
});

$f3->route('GET /user', function(){
    //Display the user page
    $view = new Template();
    echo $view->render('views/user.html');
});

// Run Fat-Free
$f3->run();
