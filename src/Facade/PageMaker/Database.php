<?php

namespace Facade\PageMaker;

class Database
{
    private function __construct() {}

    public static function getProperties($dbname)
    {
        $filename = $dbname . ".php";
        $prop = "";
        require_once $filename;
        return $maildata;
    }
}