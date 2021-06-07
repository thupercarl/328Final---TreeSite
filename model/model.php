<?php

class Model
{
    static function validName($name)
    {
        return strLen(trim($name)) >= 2;
    }

    static function validUsername($username)
    {
        return strLen(trim($username)) >= 2;
    }

    static function validPassword($password)
    {
        return strLen(trim($password)) >= 2;
    }

    static function matchPassword($password, $repassword)
    {
        return $password == $repassword;
    }

    static function validFavTree($favtree)
    {
        return strLen(trim($favtree)) >= 2;
    }

    static function checkFilled($field)
    {
        return strLen(trim($field)) >= 1;
    }
}

