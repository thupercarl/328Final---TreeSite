<?php

function validName($name)
{
    return strLen(trim($name)) >= 2;
}

function validUsername($username)
{
    return strLen(trim($username)) >= 2;
}

function validPassword($password)
{
    return strLen(trim($password)) >= 2;
}
