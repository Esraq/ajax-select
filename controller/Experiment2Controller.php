<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;

class Experiment2Controller extends Controller
{
    public function index(Request $request){
         
        $name = $request->get('q'); 
        $members=Member::all()->where('title',$name);
        view()->share('members', $members);

        return view('experiment_2');
      

    }
}
