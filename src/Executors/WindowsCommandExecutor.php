<?php
namespace Shahadat\Edc\Executors;


class WindowsCommandExecutor extends BaseExecutor
{

    /**
     * Execute a command
     *
     * @param $command
     * @return mixed
     */
    public function execute($command)
    {
        chdir(base_path());
        return shell_exec($command);
    }

}