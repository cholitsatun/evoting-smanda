<?php

namespace App\Http\Controllers;

use App\Voter;
use App\Paslon;
use App\Result;
use Illuminate\Http\Request;

class AdminResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voter = Voter::all()->count();
        $jmlhvoter = Result::all()->count();
        
        $golput = $voter - $jmlhvoter;
        $paslon = Paslon::all();
        foreach ($paslon as $item) {
            $jmlhsuara = Result::where('paslon_id', $item->id)->count();
            $item->suara = $jmlhsuara; 
        }
        $jmlhpaslon = Paslon::all()->count();
       
        return view('admin.result.result', compact('paslon', 'golput', 'jmlhpaslon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
