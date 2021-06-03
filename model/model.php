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
}
