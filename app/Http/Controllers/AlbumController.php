<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function CreateAlbum(Request $request)
    {
        $request->validate(['nama' => 'required']);
        $new_album = new Album;
        $new_album->nama = $request->nama;
        $new_album->izin = $request->izin;
        $new_album->User()->associate(Auth::id());
        try
        {
            $new_album->save();
            return redirect()->back();
            
        }
        catch(\Exception $e)
        {
            return back()->withErrors('Kesalahan terjadi dalam menyimpan album anda mohon kirim ulang dengan format yang telah digunakan');
        }
    }
    
}
