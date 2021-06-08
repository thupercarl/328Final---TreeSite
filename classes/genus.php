<?php

class Genus
{
    private $_genus;

    /**
     * Genus Constructor
     * @param $genus
     */
    public function __construct($genus = "")
    {
        $this->_genus = $genus;
    }

    /**
     * gets genus
     * @return string
     */
    public function getGenus()
    {
        return $this->_genus;
    }

    /**
     * sets genus
     * @param string $genus
     */
    public function setGenus($genus)
    {
        $this->_genus = $genus;
    }


}
