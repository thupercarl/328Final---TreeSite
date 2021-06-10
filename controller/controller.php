<?php

//Controller class to conntect to index

/**
 * Class Controller
 */
class Controller
{
    /**
     * the routing variable
     * @var
     */
    private $_f3; //router

    /**
     * Controller constructor.
     * @param $f3
     */
    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    /**
     * Displays the home page
     */
    function home()
    {
        // Display the home page
        $view = new Template();
        echo $view->render('views/home.html');
    }

    /**
     * Displays the results page
     */
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

    /**
     * displays the signup page
     */
    function signup()
    {
        //Reinitialize session array
        $_SESSION = array();

        //If the form has been submitted, validate the data
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //var_dump($_POST);
            //grabbing user input and putting into tree objects
            $_SESSION['climate'] = new Climate();
            $_SESSION['species'] = new Species();


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
            $treeToxic = $_POST['treeToxic'];
            $treeSoilMoisture = $_POST['treeSoilMoisture'];
            $treeSunlight = $_POST['treeSunlight'];

            //Set variables to object parameters
            $_SESSION['climate']->setClimateZone($treeClimateZone);
            $_SESSION['climate']->setColdestTemp($treeColdestTemp);
            $_SESSION['species']->setName($treeName);
            $_SESSION['species']->setScientificName($treeScientificName);
            $_SESSION['species']->setGenus($treeGenus);
            $_SESSION['species']->setAvgHeight($treeAvgHeight);
            $_SESSION['species']->setAvgSpread($treeAvgSpread);
            $_SESSION['species']->setAcidicSoil($treeAcidicSoil);
            $_SESSION['species']->setToxic($treeToxic);
            $_SESSION['species']->setSoilMoisture($treeSoilMoisture);
            $_SESSION['species']->setSunlight($treeSunlight);


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

            //If the error array is empty, redirect to summary page
            if (empty($this->_f3->get('errors'))) {
                header('location: summary');
            }

            //If favorite tree is valid, store data
            if(Model::validFavTree($treeName)) {
                $_SESSION['treeName'] = $treeName;
            }
            //Otherwise, set an error variable in the hive
            else {
                $this->_f3->set('errors["treeName"]', 'Please enter a tree name');
            }

            //Set rest of session variables if provided
            $_SESSION['treeScientificName'] = $treeScientificName;
            $_SESSION['treeGenus'] = $treeGenus;
            $_SESSION['treeClimateZone'] = $treeClimateZone;
            $_SESSION['treeColdestTemp'] = $treeColdestTemp;
            $_SESSION['treeAvgHeight'] = $treeAvgHeight;
            $_SESSION['treeAvgSpread'] = $treeAvgSpread;
            $_SESSION['treeAcidicSoil'] = $treeAcidicSoil;
            $_SESSION['treeToxic'] = $treeToxic;
            $_SESSION['treeSoilMoisture'] = $treeSoilMoisture;
            $_SESSION['treeSunlight'] = $treeSunlight;

        }

        //Display the signup page
        $view = new Template();
        echo $view->render('views/signup.html');
    }

    /**
     * Displays the summary page
     */
    function summary()
    {
        //var_dump($_SESSION);
        //save data to database
        $userSub = $GLOBALS['dataLayer']->addData($_SESSION['species'], $_SESSION['climate'], $_SESSION['fname'], $_SESSION['lname']);
        $this->_f3->set('userSub', $userSub);

        //Display the summary page
        $view = new Template();
        echo $view->render('views/summary.html');
    }

    /**
     * Displays the user page
     */
    function user()
    {
        //query db
        $viewUser = $GLOBALS['dataLayer']->viewUser();

        //add db result to hive
        $this->_f3->set('viewUser', $viewUser);

        //Display the user page
        $view = new Template();
        echo $view->render('views/user.html');
    }
}
