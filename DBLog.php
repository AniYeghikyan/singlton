<?php
require_once 'LogInterface.php';
require_once 'Log.php';
class DBLog extends Log implements LogInterface
{
    private function writeToDb($message)
{
    //insert to db
}

    public static function log($message){
}

}