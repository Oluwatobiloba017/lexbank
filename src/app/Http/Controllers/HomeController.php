<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

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
        $transaction = Transaction::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->limit(10)->get();
        return view('home', ['transactions' => $transaction]);
    }

    public function transfer(){

    }

    public function deposit(){
        
    }

    public function withdraw(){
        
    }

    public function viewAccount(){
        
    }
}
