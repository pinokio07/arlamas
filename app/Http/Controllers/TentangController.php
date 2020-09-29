<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Str;

class TentangController extends Controller
{
    public function tentang()
    {
    	$perusahaan = \App\Models\Perusahaan::first();
    	$pegawai = \App\Models\Pegawai::all();

    	return view('pages.tentang.perusahaan', compact(['perusahaan','pegawai']));
    }

    public function tambahpegawai(Request $request)
    {
    	$user = \App\Models\User::updateOrCreate([
            'email' => $request->email,
            'username' => $request->username,
        ],[
            'password' => $request->password,
        ]);

        $pegawai = \App\Models\Pegawai::updateOrCreate([
            'user_id' => $user->id,            
        ],[
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ]);

        if ($request->hasFile('avatar')) {
            $ext = $request->file('avatar')->getClientOriginalExtension();
            $nama = Str::slug($pegawai->nama).'_'.round(microtime(true)).'.'.$ext;
            $request->file('avatar')->move('images/personalia/', $nama);
            $pegawai->avatar = $nama;
            $pegawai->save();
        }

        return redirect('/tentang');
    }

    public function getpegawai(Pegawai $pegawai)
    {
        return response()->json([
            'id' => $pegawai->id,
            'nama' => $pegawai->nama,
            'jabatan' => $pegawai->jabatan,
            'username' => $pegawai->user->username,
            'email' => $pegawai->user->email,
        ]);
    }

    public function editpegawai(Request $request, Pegawai $pegawai)
    {
        $lama = public_path().'/images/personalia/'.$pegawai->avatar;
        $user = $pegawai->user;        
        if ($request->password != '') {
            $user->password = bcrypt($request->password);            
        }
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();

        $pegawai->nama = $request->nama;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->save();
        if ($request->hasFile('avatar')) {            
            if (!is_dir($lama) && file_exists($lama)) {
                unlink($lama);
            }
            $ext = $request->file('avatar')->getClientOriginalExtension();
            $nama = Str::slug($pegawai->nama).'_'.round(microtime(true)).'.'.$ext;
            $request->file('avatar')->move('images/personalia/', $nama);
            $pegawai->avatar = $nama;
            $pegawai->save();
        }
        // dd($lama);
        return redirect('/tentang')->with('sukses', 'Berhasil merubah data pegawai.');
    }
}
