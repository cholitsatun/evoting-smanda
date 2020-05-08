<?php

namespace App\Http\Controllers;

use App\Paslon;
use App\Visimisi;
use Illuminate\Http\Request;

class AdminVisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c = Visimisi::all();
        return view('admin.visimisi.visimisi', compact('c'));

        //compact adalah melempar isi variabel ke view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $f = Paslon::all();
        return view('admin.visimisi.create', compact('f'));
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
            'calon' => 'required | unique:visimisis,paslon_id',
            'visi' => 'required',
            'misi' => 'required',
            
        ]);
       

        $visimisi = Visimisi::create([
            'visi' => request('visi'),
            'misi' => request('misi'),
            'paslon_id' => request ('calon')

        ]);
        return redirect('admin/visimisis');
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
        $visi = Visimisi::find($id);
        $calon = Paslon::all();

        return view('admin.visimisi.edit', compact('visi', 'calon'));
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
        $errors = $this->validate($request, [
            'calon' => 'required | unique:visimisis,paslon_id,'.$id,
            'visi' => 'required',
            'misi' => 'required'
        ]);

        Visimisi::find($id)->update([
            'visi' => request('visi'),
            'misi' => request('misi'),
            'paslon_id' => request ('calon')
        ]);
        return redirect('admin/visimisis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visim = Visimisi::find($id);
        $visim->delete();
        return redirect('admin/visimisis');
    }
}
