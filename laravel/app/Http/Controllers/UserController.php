<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function toggle_saved() {
        $id = Request::get('id');
        $user = Auth::user();
        $saved = $user->saved;
        $key = array_search($id, $saved);
        if ($key === FALSE) {
            array_push($saved, $id);
        } else {
            array_splice($saved, $id);
        }
        $user->saved = $saved;
        $user->save();
        return response()->json();
    }
}
