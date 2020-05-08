<?php

namespace App\Http\Controllers;

use Auth;
use App\Voter;
use App\Rules\RegisterVoter;
use Illuminate\Http\Request;
use App\Imports\VotersImport;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;


class AdminVoterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        // $errors = $this->validate($request, [
        //     'nisn' => 'required | unique:voters,nisn',
        //     'namapemilih' => 'required',
        //     'kelas' => 'required',
        // ]);

        $password = $this->randomString();
        $pemilih = Voter::create([
            'nisn' => request('nisn'),
            'name' => request('namapemilih'),
            'class' => request('kelas'),
            'password' => Hash::make($password),
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
    public function edit($id)
    {
        
        $milih = Voter::find($id);
        return view('admin/voters/edit', compact('milih'));
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
    public function destroy($id)
    {
        $voter = Voter::find($id);
        $voter->delete();
        return redirect('admin/voters');
    }

    public function import(Request $request) 
    {
        $errors = $request->validate([
            'excel' => 'required|mimes:ods,xlsx, xls',
        ]);
        Excel::import(new VotersImport, request()->file('excel'));
        
        return redirect('admin/voters');
    }
    
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$voter = Voter::where('name','like',"%".$cari."%")->paginate();
 
    		// mengirim data pegawai ke view index
		return view('/admin/voters/voter',compact('voter'));
 
	}

    public function frontregist()
    {
        return view('register/register');
    }

    public function backregist(Request $request)
    {
        $this->validate($request, [
            'nisn' => ['bail', 'required', 'exists:voters,nisn', new RegisterVoter],
        ]);

        Voter::where('nisn', $request->nisn)->update([
            'nisn' => request('nisn'),
            'name' => request('nama'),
            'class' => request('kelas'),
            'password' => Hash::make(request('password')),
            'registerinfo' => 1
        ]);

        if (Auth::guard('voter')->attempt(['nisn' => $request->nisn, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect()->intended('/suara/home');
        }
    }

    function randomString($length = 6) {
        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }
}
