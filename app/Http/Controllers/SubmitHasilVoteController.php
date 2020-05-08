<?php

namespace App\Http\Controllers;

use App\Voter;
use App\Paslon;
use App\Result;
use Illuminate\Http\Request;

class SubmitHasilVoteController extends Controller
{
    public function vote(Request $request)
    {
        $result = Result::create([
            'paslon_id' => request('paslon'),
            'voter_id' => request('voter'),
        ]);
        Voter::find(request('voter'))->update([
            'status' => 1
        ]);
        return redirect('/berhasil-submit');
        
    }
    public function index()
    {
        $paslon = Paslon::all();
        return view('submithasil.submithasil');
    }

}
