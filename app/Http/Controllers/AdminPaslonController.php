<?php

namespace App\Http\Controllers;

use App\Paslon;
use Illuminate\Http\Request;

class AdminPaslonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b = Paslon::all();
        return view('admin.paslon.paslon', compact('b'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.paslon.create');
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
            'foto' => 'required | mimes:jpeg,jpg,png,svg | max : 2048',
            'ketos' => 'required',
            'waketos' => 'required',
        ]);

        $gambar = $request->file('foto');
        $nama_gambar = $gambar->getClientOriginalName();
        $gambar->move(public_path('gambar'), $nama_gambar);

        $paslon = Paslon::create([
            'nama_ketos' => request('ketos'),
            'nama_waketos' => request('waketos'),
            'foto' => $nama_gambar,
        ]);

        return redirect('admin/paslons');
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
        $calon = Paslon::find($id);
        return view('admin.paslon.edit', compact('calon'));
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
            'foto' => 'nullable | mimes:jpeg,jpg,png,svg | max : 2048',
            'ketos' => 'required',
            'waketos' => 'required',
        ]);

        if ($request->file('foto') != null ) {
            //upload baru
            $gambar = $request->file('foto');
            $nama_gambar = $gambar->getClientOriginalName();
            $gambar->move(public_path('gambar'), $nama_gambar);


            //menghapus yg lama
            $calon = Paslon::find($id);
            $image_path = "gambar/".$calon->foto;
            if (file_exists($image_path)) {
                @unlink($image_path);
            }

            //update
            $calon->update([
                'foto'=>$nama_gambar,
            ]);
        }
        
        Paslon::find($id)->update([
            'nama_ketos' => request('ketos'),
            'nama_waketos' => request('waketos'),
        ]);
        return redirect('admin/paslons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paslon = Paslon::find($id);
        $paslon->delete();
        return redirect('admin/paslons');
    }
}
