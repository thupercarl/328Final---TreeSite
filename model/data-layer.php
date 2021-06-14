<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/../config.php');

/**
 * Class DataLayer
 */
class DataLayer
{

    /**
     * database handle
     * @var PDO
     */
    private $_dbh;

    /**
     * DataLayer constructor.
     */
    function __construct()
    {
        //Connect to db
        try {
            //Instantiate a PDO database object
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            //echo "Connected to database!";
        }
        catch(PDOException $e) {
            //echo $e->getMessage();
            die("Shoot! We're having connection issues");
        }
    }

    /**
     * grab data to display on results page
     * @return array
     */
    function display()
    {
        $sql = "SELECT * FROM species 
                INNER JOIN genus on species.genusID = genus.genusID";

        $statement = $this->_dbh->prepare($sql);

        //no parameters to bind
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);//grab result as associative array
        return $result;
    }

    /**
     * grab data to display on results page
     * @return array
     */
    function display2()
    {
        $sql = "SELECT * FROM climate
                INNER JOIN climate_tree ON climate.climateID = climate_tree.climateID
                INNER JOIN species ON climate_tree.treeID = species.treeID
                INNER JOIN genus on species.genusID = genus.genusID
                ORDER BY climateZone";

        $statement = $this->_dbh->prepare($sql);

        //no parameters to bind
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);//grab result as associative array
        return $result;
    }

    /**
     * grab data from user and put into user table
     * @param $species
     * @param $climate
     * @param $fname
     * @param $lname
     */
    function addData($species, $climate, $fname, $lname)
    {
        //echo "<pre>";
        //var_dump($species);
        //var_dump($climate);
        //echo "</pre>";
        //define query
        $sql = "INSERT INTO user (fname, lname, name, scientificName, genus, climateZone, coldestTemp, avgHeight, avgSpread, acidicSoil, toxic, soilMoisture, sunlight)
                VALUES (:fname, :lname, :name, :scientificName, :genus, :climateZone, :coldestTemp, :avgHeight, :avgSpread, :acidicSoil, :toxic, :soilMoisture, :sunlight)";

        //prepare statement
        $statement = $this->_dbh->prepare($sql);

        //bind parameters
        $statement->bindParam(':fname', $fname, PDO::PARAM_STR);
        $statement->bindParam(':lname', $lname, PDO::PARAM_STR);
        $statement->bindParam(':name', $species->getName(), PDO::PARAM_STR);
        $statement->bindParam(':scientificName', $species->getScientificName(), PDO::PARAM_STR);
        $statement->bindParam(':genus', $species->getGenus(), PDO::PARAM_STR);
        $statement->bindParam(':climateZone', $climate->getClimateZone(), PDO::PARAM_STR);
        $statement->bindParam(':coldestTemp', $climate->getColdestTemp(), PDO::PARAM_STR);
        $statement->bindParam(':avgHeight', $species->getAvgHeight(), PDO::PARAM_STR);
        $statement->bindParam(':avgSpread', $species->getAvgSpread(), PDO::PARAM_STR);
        $statement->bindParam(':acidicSoil', $species->getAcidicSoil(), PDO::PARAM_STR);
        $statement->bindParam(':toxic', $species->getToxic(), PDO::PARAM_STR);
        $statement->bindParam(':soilMoisture', $species->getSoilMoisture(), PDO::PARAM_STR);
        $statement->bindParam(':sunlight', $species->getSunlight(), PDO::PARAM_STR);

        //execute
        $statement->execute();
    }


    function viewUser()
    {
        $sql = "SELECT * FROM user";

        $statement = $this->_dbh->prepare($sql);

        //no parameters to bind
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);//grab result as associative array
        return $result;
    }

}