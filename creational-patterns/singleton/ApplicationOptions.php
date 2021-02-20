<?php


class ApplicationOptions
{
    private static $instance = null;
    private $language;

    protected function __construct()
    {
        $this->language = 'en';
    }


    protected function __clone() { }


    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }


    public static function getInstance(): ApplicationOptions
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }


    public function getLanguage()
    {
        return $this->language;
    }
}