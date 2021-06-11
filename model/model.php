<!--
  Model class for data validation
  Authors: Jake Donaldson & Aubrey Davies
  File: model.php
  Date: 6/15/2021
-->

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
    static function validTreeName($favtree): bool
    {
        return strLen(trim($favtree)) >= 2;
    }
}

