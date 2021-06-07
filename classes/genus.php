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
     * @return mixed
     */
    public function getGenus()
    {
        return $this->_genus;
    }

    /**
     * sets genus
     * @param mixed $genus
     */
    public function setGenus($genus): void
    {
        $this->_genus = $genus;
    }


}
