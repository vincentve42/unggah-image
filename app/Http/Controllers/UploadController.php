<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if(!Auth::user())
        {
            if($request->option == 0)
            {
                $file = $request->file("file");
                $extension = $file->getClientOriginalExtension();
                $filename = time() .".". $extension;
                $upload = new Upload;
                
                $upload->Album()->associate($request->option);
                $file->storeAs('auth', $filename,'public');
                $upload->file_name = 'auth/'.$filename;
                $upload->save();
            }
            else
            {
                $file = $request->file("file");
                $extension = $file->getClientOriginalExtension();
                $filename = time() .".". $extension;
                $upload = new Upload;
                $upload->user_id = Auth::id();
                $upload->album_id = 0;

                $file->storeAs('auth', $filename,'public');
                $upload->file_name = 'auth/'.$filename;
                $upload->save();
            }
        }
        else
        {
            $file = $request->file("file");
            $extension = $file->getClientOriginalExtension();
            $filename = time() .".". $extension;
            $guest_upload = new Upload;
            $guest_upload->album_id = 0;
            $file->storeAs('guest', $filename,'public');
            $guest_upload->file_name = 'guest/'.$filename;
            $guest_upload->save();
        }
    }
}
