<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowUserController extends Controller
{
    public function Follow(Request $request)
    {
        $count = Auth::user()->Following()->where('followed_id', $request->id)->count();
        if ($count > 0) {
            $follow = Auth::user()->Following()->where('followed_id', $request->id)->first();
            $follow->delete();
        }
        else
        {
        $follow = new Follow;
        $follow->user()->associate(Auth::id());
        $follow->followed_id = $request->id;
        try
        {
            $follow->save();
            
        }
        catch (Exception $e)
        {
            return $e;
        }
    }
        

        return redirect()->back();
    }
   
}
