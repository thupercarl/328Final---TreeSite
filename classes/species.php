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
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * sets name
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * gets scientific name
     * @return mixed
     */
    public function getScientificName()
    {
        return $this->_scientificName;
    }

    /**
     * sets scientific name
     * @param mixed $scientificName
     */
    public function setScientificName($scientificName)
    {
        $this->_scientificName = $scientificName;
    }

    /**
     * gets average height
     * @return mixed
     */
    public function getAvgHeight()
    {
        return $this->_avgHeight;
    }

    /**
     * sets average height
     * @param mixed $avgHeight
     */
    public function setAvgHeight($avgHeight)
    {
        $this->_avgHeight = $avgHeight;
    }

    /**
     * gets average spread
     * @return mixed
     */
    public function getAvgSpread()
    {
        return $this->_avgSpread;
    }

    /**
     * sets average spread
     * @param mixed $avgSpread
     */
    public function setAvgSpread($avgSpread)
    {
        $this->_avgSpread = $avgSpread;
    }

    /**
     * gets acidic soil
     * @return mixed
     */
    public function getAcidicSoil()
    {
        return $this->_acidicSoil;
    }

    /**
     * sets acidic soil
     * @param mixed $acidicSoil
     */
    public function setAcidicSoil($acidicSoil)
    {
        $this->_acidicSoil = $acidicSoil;
    }

    /**
     * gets tree toxicity
     * @return mixed
     */
    public function getToxic()
    {
        return $this->_toxic;
    }

    /**
     * sets tree toxicity
     * @param mixed $toxic
     */
    public function setToxic($toxic)
    {
        $this->_toxic = $toxic;
    }

    /**
     * gets soil moisture
     * @return mixed
     */
    public function getSoilMoisture()
    {
        return $this->_soilMoisture;
    }

    /**
     * sets soil moisture
     * @param mixed $soilMoisture
     */
    public function setSoilMoisture($soilMoisture)
    {
        $this->_soilMoisture = $soilMoisture;
    }

    /**
     * gets sunlight
     * @return mixed
     */
    public function getSunlight()
    {
        return $this->_sunlight;
    }

    /**
     * sets sunlight
     * @param mixed $sunlight
     */
    public function setSunlight($sunlight)
    {
        $this->_sunlight = $sunlight;
    }


}
