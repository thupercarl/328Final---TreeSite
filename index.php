<?php

// This is my controller for the Final project

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

// Require autoload file
require_once ('vendor/autoload.php');
require_once ('model/validation.php');

// Instantiate Fat-Free
$f3 = Base::instance();

// Define default route
$f3->route('GET /', function(){
    // Display the home page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Define results route
$f3->route('GET /results', function(){
    //Display the results page
    $view = new Template();
    echo $view->render('views/results.html');
});

// Define signup route
$f3->route('GET|POST /signup', function($f3){

    //Reinitialize session array
    $_SESSION = array();

    //Initialize variables for user input
    $fname = "";
    $lname = "";
    $username = "";
    $password = "";
    $repassword = "";

    //If the form has been submitted, validate the data
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //var_dump($_POST);

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];

        //If fname is valid, store data
        if(validName($_POST['fname'])) {
            $_SESSION['fname'] = $fname;
        }
        //Otherwise, set an error variable in the hive
        else {
            $f3->set('errors["fname"]', 'Please enter a first name');
        }

        //If lname is valid, store data
        if(validName($_POST['lname'])) {
            $_SESSION['lname'] = $lname;
        }
        //Otherwise, set an error variable in the hive
        else {
            $f3->set('errors["lname"]', 'Please enter a last name');
        }

        //If username is valid, store data
        if(validUsername($_POST['username'])) {
            $_SESSION['username'] = $username;
        }
        //Otherwise, set an error variable in the hive
        else {
            $f3->set('errors["username"]', 'Please enter a username');
        }

        //If password is valid, store data
        if(validPassword($_POST['password'])) {
            $_SESSION['password'] = $password;
        }
        //Otherwise, set an error variable in the hive
        else {
            $f3->set('errors["password"]', 'Please enter a password');
        }

        //If password is valid, store data
        if(matchPassword($_POST['password'],$_POST['repassword'])) {
            $_SESSION['repassword'] = $repassword;
        }
        //Otherwise, set an error variable in the hive
        else {
            $f3->set('errors["repassword"]', 'Please enter the same password');
        }

        //If the error array is empty, redirect to summary page
        if (empty($f3->get('errors'))) {
            header('location: summary');
        }
    }

    //Display the signup page
    $view = new Template();
    echo $view->render('views/signup.html');
});

// Define summary route
$f3->route('GET /summary', function(){
    //Display the summary page
    $view = new Template();
    echo $view->render('views/summary.html');
});

// Define login route
$f3->route('GET /login', function(){
    //Display the login page
    $view = new Template();
    echo $view->render('views/login.html');
});

// Define admin route
$f3->route('GET /admin', function(){
    //Display the login page
    $view = new Template();
    echo $view->render('views/admin.html');
});

// Define user page route
$f3->route('GET /user', function(){
    //Display the user page
    $view = new Template();
    echo $view->render('views/user.html');
});

// Run Fat-Free
$f3->run();
