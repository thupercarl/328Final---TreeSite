<?php

/**
 * Class Model
 */
class Model
{
    /**
     * checks if name is valid
     * @param $name
     * @return bool
     */
    static function validName($name): bool
    {
        return strLen(trim($name)) >= 2;
    }

    /**
     * Checks if tree name is valid
     * @param $favtree
     * @return bool
     */
    static function validFavTree($favtree): bool
    {
        return strLen(trim($favtree)) >= 2;
    }
}

