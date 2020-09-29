<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryFoto;
use App\Models\GalleryVideo;
use Str;

class GalleryController extends Controller
{
    public function gallery()
    {
    	$foto = GalleryFoto::all();
    	$video = GalleryVideo::all();

    	return view('pages.tentang.gallery', compact(['foto', 'video']));
    }

    public function tambahfoto(Request $request)
    {
    	foreach ($request->foto as $foto) {
    		$fileName = $foto->getClientOriginalName();
            $nama = pathinfo($fileName,PATHINFO_FILENAME);
            // $ext = $foto->getClientOriginalExtension();
            $foto->move('images/gallery/', $fileName);

    		$foto = GalleryFoto::updateOrCreate([
    			'nama' => $nama,
    		],[
    			'foto' => $fileName,
    		]);
    	}

    	return redirect('/gallery')->with('sukses', 'Berhasil menambah foto.');
    }

    public function hapusfoto(Request $request)
    {
    	$gallery = GalleryFoto::findOrFail($request->fid);

    	$foto = public_path().'/images/gallery/'.$gallery->foto;
    	// dd($foto);
    	if (!is_dir($foto) && file_exists($foto)) {
    		unlink($foto);
    	}

    	$gallery->delete();

    	return redirect('/gallery')->with('sukses', 'Berhasil menghapus foto.');
    }

    public function uploadvideo(Request $request)
    {
        $nama = Str::slug($request->nama);
        $ext = $request->video->getClientOriginalExtension();
        $next = 2;
        while (GalleryVideo::where('nama', $nama)->first()) {
            $nama .= '_'.$next;
            $next++;
        }
        $video = $nama.'.'.$ext;
        $request->video->move('video/', $video);

        $video = GalleryVideo::create([
            'nama' => $nama,
            'video' => $video,
        ]);

        return redirect('/gallery')->with('sukses', 'Berhasil upload Video.');
    }

    public function hapusvideo(Request $request)
    {
        $video = GalleryVideo::findOrFail($request->vid);
        $lama = public_path().'/video/'.$video->video;
        if (!is_dir($lama) && file_exists($lama)) {
            unlink($lama);
        }

        $video->delete();

        return redirect('/gallery')->with('sukses', 'Berhasil menghapus video.');

    }
}
