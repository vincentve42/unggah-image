<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackgroundController extends Controller
{
    public function ChangeBackground(Request $request)
    {
        $request->validate(['bg_file' => 'required|image']);

        $file = $request->file('bg_file');

        $filename = uniqid() . '.'. $file->getClientOriginalExtension();

        $file->storeAs('banner', $filename,'public');

        $user_to_change = Auth::user();
        $user_to_change->banner = $filename;
        $user_to_change->save();
    }
}
