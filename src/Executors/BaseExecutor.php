<?php
namespace Shahadat\Edc\Executors;

abstract class BaseExecutor
{
    protected static $instance = null;

    private function __construct()
    {

    }

    /**
     * Get single instance all over the application.
     *
     * @return null|static
     */
    public static function instance(){
        return static::$instance instanceof static ? 
        static::$instance : static::$instance = new static();
    }

    public abstract function execute($command);
}