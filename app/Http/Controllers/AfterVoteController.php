<?php

namespace App\Http\Controllers;

use App\Paslon;
use App\Result;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AfterVoteController extends Controller
{

    public function index() {
        if (Auth::guard('voter')->check()) {
            
        //cara 1
        $voterId = Auth::guard('voter')->id();
        $result = DB::table('results')->where('voter_id', $voterId)->first();
        $paslon = Paslon::find($result->paslon_id);

        // //cara 2
        // $voterId = Auth::guard('voter')->id();
        // $result = Result::where('voter_id', $voterId)->first();
        // $paslon = Paslon::find($result->paslon_id);

     
        return view ('suara.aftervote', compact('paslon', 'result'));
        }
        else {
            return redirect('/loginvoter');

        } 
        
        
    }


}