<!--
  Climate class file
  Authors: Jake Donaldson & Aubrey Davies
  File: climate.php
  Date: 6/15/2021
-->

<?php

class Climate
{
    private $_climateZone;
    private $_coldestTemp;

    /**
     * Climate Constructor
     * @param $climateZone
     * @param $coldestTemp
     */
    public function __construct($climateZone = "", $coldestTemp = "")
    {
        $this->_climateZone = $climateZone;
        $this->_coldestTemp = $coldestTemp;
    }

    /**
     * gets climate
     * @return mixed
     */
    public function getClimateZone()
    {
        return $this->_climateZone;
    }

    /**
     * sets climate
     * @param mixed $climateZone
     */
    public function setClimateZone($climateZone)
    {
        $this->_climateZone = $climateZone;
    }

    /**
     * gets coldest temp
     * @return mixed
     */
    public function getColdestTemp()
    {
        return $this->_coldestTemp;
    }

    /**
     * sets coldest temp
     * @param mixed $coldestTemp
     */
    public function setColdestTemp($coldestTemp)
    {
        $this->_coldestTemp = $coldestTemp;
    }


}