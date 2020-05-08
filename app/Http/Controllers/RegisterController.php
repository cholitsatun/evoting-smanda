<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $a = Voter::all();
        return view('admin.voters.voter', compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.voters.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = $this->validate($request, [
            'nisn' => 'required | unique:voters,nisn',
            'nama' => 'required',
            'kelas' => 'required',
            'password' => 'required',
        ]);

        // $password = $this->randomString();
        $pemilih = Voter::create([
            'nisn' => request('nisn'),
            'nama' => request('namapemilih'),
            'kelas' => request('kelas'),
            'password' => Hash::make('password'),
            'status' => 0
        ]
        );

        return redirect('admin/voters');
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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $errors = $this->validate($request, [
            'nisn' => 'required | unique:voters,nisn,'.$id,
            'namapemilih' => 'required',
            'kelas' => 'required',
        ]);
        Voter::find($id)->update([
            'nisn' => request('nisn'),
            'name' => request('namapemilih'),
            'class' => request('kelas')
        ]);
        return redirect('admin/voters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
