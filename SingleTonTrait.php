<?php
trait SingleTonTrait{
    static protected $instance = null;
    private function __construct()
    {
        //
    }
    public function __clone()
    {
        throw new \Exception('Singleton cannot be cloned');
    }

    public function __wakeup()
    {
        throw new \Exception('Singleton cannot be unserialize');
    }
    static public function getInstance()
    {
        return  static::$instance ?? static::$instance = new static();
    }
}