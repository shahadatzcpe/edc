<?php
namespace Shahadat\Edc;

class Terminal
{

    /**
     * Get a windows executor instance
     *
     * @return \Edc\Executors\BaseExecutor;
     */
    public static function instance()
    {
        $executor =  config('config.default_executor');  //config
        return  config("config.executors.{$executor}")::instance();
    }

    /**
     * Execute a command
     *
     * @param $command
     * @return mixed
     */
    public static function execute($command)
    {
        return static::instance()->execute($command);
    }
}