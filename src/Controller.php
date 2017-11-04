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
    	if(App::environment('production'))
        {
			return  response("App is now on production environment. You cannot run any operation using this package.");
        }

       return view('edc::easy-developments-commands.index');
    }


    /**
     * Entry point of any command request
     *
     * @return \Illuminate\Http\Response
     */
    public function runCommand(Request $request)
    {
        if(App::environment('production'))
        {
        	return response("App is now on production environment. You cannot run any operation using this package.");
        }

        $output = Terminal::execute($request->command);
        return htmlentities($output);
    }
}
