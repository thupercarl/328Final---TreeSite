<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/../config.php');

class DataLayer
{

    private $_dbh;

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

    function display()
    {
        /*
        $sql = "SELECT treeID, genus, species.name, scientificName, climateZone, coldestTemp, avgHeight, avgSpread, acidicSoil, toxic, soilMoisture, sunlight
         FROM species, climate, genus WHERE treeID = climateID";
        */

        /*
        $sql = "SELECT * FROM climate 
INNER JOIN climate_tree ON climate.climateID = climate_tree.climateID
INNER JOIN species ON climate_tree.treeID = species.treeID;";
        */

        $sql = "SELECT * FROM climate 
                INNER JOIN climate_tree ON climate.climateID = climate_tree.climateID
                INNER JOIN species ON climate_tree.treeID = species.treeID 
                INNER JOIN genus on species.genusID = genus.genusID";

        $statement = $this->_dbh->prepare($sql);

        //no parameters to bind

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);//grab result as associative array
        return $result;
    }

}