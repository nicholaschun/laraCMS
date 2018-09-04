<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ConnectDb;

class SetupController extends Controller
{
    protected $connectDb;
    public function __construct(ConnectDb $connectDb)
    {
        $this->connectDb = $connectDb;
    }

    public  function index(){
        if(env('DB_DATABASE') != 'homestead'){
            return view('themes.laraBlog.index');
        }
        return view('index');
    }

    public function getStarted(){
        if(env('DB_DATABASE') != 'homestead'){
            return view('themes.laraBlog.index');
        }
        return view('getStarted');
    }

    public function postGetStarted(Request $request){
        $this->validate($request, [
            'projectName' => 'required',
            'email' => 'required|email',
            'dbName' => 'required',
            'dbUser' => 'required',
        ]);
        $this->connectDb->createDb($request);
        return view('themes.laraBlog.index');
    }
}
