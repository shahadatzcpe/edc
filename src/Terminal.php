<?php
namespace Shahadat\Edc;

use Shahadat\Edc\Executors\BaseExecutor;

class Terminal
{

    /**
     * Get a windows executor instance
     *
     * @return \Edc\Executors\BaseExecutor;
     */
    public static function executor()
    {
        $config = config('edc') ?? require_once __DIR__. '/config.php'; 

        $default_executor = $config['default_executor'] ?? 'unknown';

        $executor_name =  $config['executors'][$default_executor] ?? null;  

        $executor = $executor_name::instance();

        if(!$executor instanceof BaseExecutor)
        {
            throw new Exception("Error Processing Request", 1);
        }  

        return $executor;
    }

    /**
     * Execute a command
     *
     * @param $command
     * @return mixed
     */
    public static function execute($command)
    {
        return static::executor()->execute($command);
    }
}