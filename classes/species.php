<!--
  Species class file
  Authors: Jake Donaldson & Aubrey Davies
  File: species.php
  Date: 6/15/2021
-->

<?php

class Species extends Genus
{
    private $_name;
    private $_scientificName;
    private $_avgHeight;
    private $_avgSpread;
    private $_acidicSoil;
    private $_toxic;
    private $_soilMoisture;
    private $_sunlight;

    /**
     * gets name
     * @return string
     */
    public function getName(): string
    {
        return $this->_name;
    }

    /**
     * sets name
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->_name = $name;
    }

    /**
     * gets scientific name
     * @return string
     */
    public function getScientificName(): string
    {
        return $this->_scientificName;
    }

    /**
     * sets scientific name
     * @param string $scientificName
     */
    public function setScientificName(string $scientificName): void
    {
        $this->_scientificName = $scientificName;
    }

    /**
     * gets average height
     * @return string
     */
    public function getAvgHeight(): string
    {
        return $this->_avgHeight;
    }

    /**
     * sets average height
     * @param string $avgHeight
     */
    public function setAvgHeight(string $avgHeight): void
    {
        $this->_avgHeight = $avgHeight;
    }

    /**
     * gets average spread
     * @return string
     */
    public function getAvgSpread(): string
    {
        return $this->_avgSpread;
    }

    /**
     * sets average spread
     * @param string $avgSpread
     */
    public function setAvgSpread(string $avgSpread): void
    {
        $this->_avgSpread = $avgSpread;
    }

    /**
     * gets acidic soil
     * @return string
     */
    public function getAcidicSoil(): string
    {
        return $this->_acidicSoil;
    }

    /**
     * sets acidic soil
     * @param string $acidicSoil
     */
    public function setAcidicSoil(string $acidicSoil): void
    {
        $this->_acidicSoil = $acidicSoil;
    }

    /**
     * gets tree toxicity
     * @return string
     */
    public function getToxic(): string
    {
        return $this->_toxic;
    }

    /**
     * sets tree toxicity
     * @param string $toxic
     */
    public function setToxic(string $toxic): void
    {
        $this->_toxic = $toxic;
    }

    /**
     * gets soil moisture
     * @return string
     */
    public function getSoilMoisture(): string
    {
        return $this->_soilMoisture;
    }

    /**
     * sets soil moisture
     * @param string $soilMoisture
     */
    public function setSoilMoisture(string $soilMoisture): void
    {
        $this->_soilMoisture = $soilMoisture;
    }

    /**
     * gets sunlight
     * @return string
     */
    public function getSunlight(): string
    {
        return $this->_sunlight;
    }

    /**
     * sets sunlight
     * @param string $sunlight
     */
    public function setSunlight(string $sunlight): void
    {
        $this->_sunlight = $sunlight;
    }


}
