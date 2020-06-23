<?php
require_once 'SingleTonTrait.php';
require_once 'LogInterface.php';
class Log implements LogInterface
{
    use SingleTonTrait;
    static protected $logger;
    private function __construct()
    {
        //
    }

    static public function log($message)
    {
        self::$logger = static::getInstance();
    }
}