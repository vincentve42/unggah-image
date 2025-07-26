<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function upload(Request $request)
    {

        $request->validate(['file' => 'image']);
        if(!Auth::user())
        {
            if($request->option == 0) // DEfault
            {
                $file = $request->file("file");
                $extension = $file->getClientOriginalExtension();
                $filename = uniqid() .".". $extension;
                
                $upload = new Upload;
                
                $upload->Album()->associate($request->option);
                $file->storeAs('guest', $filename,'public');
                $upload->file_name = 'guest/'.$filename;
                $upload->url = uniqid();
            
                try
                {
                    $upload->save();

                    return redirect()->route('ViewPage',['url' => $upload->url]);
                }
                catch(Exception $e)
                {
                    return $e;
                }
                
            }
            
        }
        else 
        {
                $file = $request->file("file");
                $extension = $file->getClientOriginalExtension();
                $filename = uniqid() .".". $extension;
                
                $upload = new Upload;
                
                $upload->Album()->associate($request->album);
                $upload->User()->associate(Auth::id());
                $upload->private = $request->izin;
                $file->storeAs('auth', $filename,'public');
                $upload->file_name = 'auth/'.$filename;
                $upload->url = uniqid();
                try
                {
                    $upload->save();
                    return redirect()->route('ViewPage',['url' => $upload->url]);
                }
                catch(Exception $e)
                {
                    return $e;
                }

            
            
        }
    }
}
