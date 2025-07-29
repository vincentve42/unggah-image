<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;

class ImageController extends Controller
{
    public function Delete($id)
    {
        $image_to_delete = Auth::user()->Upload()->findOrFail($id);
        Storage::disk('public')->delete($image_to_delete->file_name);
        $image_to_delete->delete();

        return redirect()->route('AccountPage');
    }
    public function Search(Request $request)
    {
        
    }
}
