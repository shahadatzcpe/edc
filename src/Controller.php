<?php
namespace Shahadat\Edc;

class Controller 
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	if(\App::environment('production'))
        {
			return  response("App is now on production environment. You cannot run any operation using this package.");
        }

       $config = config('edc') ?? require_once __DIR__. '/config.php'; 

       return view('edc::index', compact('config'));
    }


    /**
     * Entry point of any command request
     *
     * @return \Illuminate\Http\Response
     */
    public function runCommand()
    {
        if(\App::environment('production'))
        {
        	return response("App is now on production environment. You cannot run any operation using this package.");
        }

        $output = Terminal::execute(request()->command);

        return htmlentities($output);
    }
}
