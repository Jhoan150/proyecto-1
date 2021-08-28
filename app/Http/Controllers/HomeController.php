<?php

namespace App\Http\Controllers;
use Login\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        #$sql = DB::connection('mysql2')->table('empleados')->get();
        $sql = DB::connection('')->table('mysql2.empleados as db2')->get();
        $email = $sql->select('db2.email')->get();
        $password = $sql->select('db2.password')->get();

        if(Auth::Request(['email']) == $email){
            return view('vista1',$email, $password);
        }
    }

    public function crud()
    {
        #Config::set('database.default', 'db1');  
    }
    // public function validateCredentials(UserContract $user, array $credentials) :bool {
        //     $passwordR = DB::select('SELECT PASSWORD("'.$credentials['password'].'") AS pass');
        //     $passwordDB = $user->getAuthPassword();
        //     return $passwordDB == $passwordR[0]->pass;
        //     }
}
