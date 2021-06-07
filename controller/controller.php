<?php

//Controller class to conntect to index
class Controller
{
    private $_f3; //router

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        // Display the home page
        $view = new Template();
        echo $view->render('views/home.html');
    }

    function results()
    {
        //query db
        $display = $GLOBALS['dataLayer']->display();

        //add db result to hive
        $this->_f3->set('display', $display);

        //echo var_dump($display);


        //Display the results page
        $view = new Template();
        echo $view->render('views/results.html');
    }

    function signup()
    {
        //Reinitialize session array
        $_SESSION = array();

        //Initialize variables for user input
        $fname = "";
        $lname = "";

        //If the form has been submitted, validate the data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //var_dump($_POST);

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $treeName = $_POST['treeName'];
            $treeScientificName = $_POST['treeScientificName'];
            $treeGenus = $_POST['treeGenus'];
            $treeClimateZone = $_POST['treeClimateZone'];
            $treeColdestTemp = $_POST['treeColdestTemp'];
            $treeAvgHeight = $_POST['treeAvgHeight'];
            $treeAvgSpread = $_POST['treeAvgSpread'];
            $treeAcidicSoil = $_POST['treeAcidicSoil'];
            $treeSoilMoisture = $_POST['treeSoilMoisture'];
            $treeSunlight = $_POST['treeSunlight'];

            //grabbing user input and putting into tree objects
            $_SESSION['climate'] = new Climate($treeClimateZone, $treeColdestTemp);
            $_SESSION['species'] = new Species(
                $treeName,
                $treeScientificName,
                $treeAvgHeight,
                $treeAvgSpread,
                $treeAcidicSoil,
                $treeSoilMoisture,
                $treeSunlight,
                $treeGenus
            );

            $_SESSION['climate']->setClimateZone($treeClimateZone);
            $_SESSION['climate']->setColdestTemp($treeColdestTemp);


            //If fname is valid, store data
            if(Model::validName($_POST['fname'])) {
                $_SESSION['fname'] = $fname;
            }
            //Otherwise, set an error variable in the hive
            else {
                $this->_f3->set('errors["fname"]', 'Please enter a first name');
            }

            //If lname is valid, store data
            if(Model::validName($_POST['lname'])) {
                $_SESSION['lname'] = $lname;
            }
            //Otherwise, set an error variable in the hive
            else {
                $this->_f3->set('errors["lname"]', 'Please enter a last name');
            }

            //If username is valid, store data
            if(Model::validUsername($_POST['username'])) {
                $_SESSION['username'] = $username;
            }
            //Otherwise, set an error variable in the hive
            else {
                $this->_f3->set('errors["username"]', 'Please enter a username');
            }

            //If password is valid, store data
            if(Model::validPassword($_POST['password'])) {
                $_SESSION['password'] = $password;
            }
            //Otherwise, set an error variable in the hive
            else {
                $this->_f3->set('errors["password"]', 'Please enter a password');
            }

            //If password is valid, store data
            if(Model::matchPassword($_POST['password'],$_POST['repassword'])) {
                $_SESSION['repassword'] = $repassword;
            }
            //Otherwise, set an error variable in the hive
            else {
                $this->_f3->set('errors["repassword"]', 'Please enter the same password');
            }

            //If the error array is empty, redirect to summary page
            if (empty($this->_f3->get('errors'))) {
                header('location: summary');
            }

            //If favorite tree is valid, store data
            if(Model::validFavTree($_POST['favtree'])) {
                $_SESSION['favtree'] = $favtree;
            }
            //Otherwise, set an error variable in the hive
            else {
                $this->_f3->set('errors["favtree"]', 'Please enter a tree name');
            }
        }

        //Display the signup page
        $view = new Template();
        echo $view->render('views/signup.html');
    }

    function summary()
    {
        //Display the summary page
        $view = new Template();
        echo $view->render('views/summary.html');
    }

    function login()
    {
        //Display the login page
        $view = new Template();
        echo $view->render('views/login.html');
    }

    function admin()
    {
        //Display the admin page
        $view = new Template();
        echo $view->render('views/admin.html');
    }

    function user()
    {
        //Display the user page
        $view = new Template();
        echo $view->render('views/user.html');
    }
}
