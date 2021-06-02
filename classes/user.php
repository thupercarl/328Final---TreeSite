<?php

/**
 * Class User
 */
class User
{
    /**
     * @var mixed|string
     */
    private $_userName;
    /**
     * @var mixed|string
     */
    private $_password;
    /**
     * @var mixed|string
     */
    private $_fname;
    /**
     * @var mixed|string
     */
    private $_lname;

    /**
     * User constructor
     */
    public function __construct($userName="", $password="", $fname="", $lname="")
    {
        $this->_userName = $userName;
        $this->_password = $password;
        $this->_fname = $fname;
        $this->_lname = $lname;
    }

    /**
     * Gets user name
     * @return mixed|string
     */
    public function getUserName(): string
    {
        return $this->_userName;
    }

    /**
     * Gets password
     * @return mixed|string
     */
    public function getPassword(): string
    {
        return $this->_password;
    }

    /**
     * Gets first name
     * @return mixed|string
     */
    public function getFname(): string
    {
        return $this->_fname;
    }

    /**
     * Gets last name
     * @return mixed|string
     */
    public function getLname(): string
    {
        return $this->_lname;
    }

    /**
     * Sets user name
     * @param mixed|string $userName
     */
    public function setUserName(string $userName): void
    {
        $this->_userName = $userName;
    }

    /**
     * Sets password
     * @param mixed|string $password
     */
    public function setPassword(string $password): void
    {
        $this->_password = $password;
    }

    /**
     * Sets first name
     * @param mixed|string $fname
     */
    public function setFname(string $fname): void
    {
        $this->_fname = $fname;
    }

    /**
     * Sets last name
     * @param mixed|string $lname
     */
    public function setLname(string $lname): void
    {
        $this->_lname = $lname;
    }


}