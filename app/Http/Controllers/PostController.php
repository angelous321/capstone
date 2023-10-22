<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;


class PostController extends Controller
{
    public function guestList()
    {
      $guest = User::where('user_role', '1')->get();
  
      return view('admin.admin-view-guest', compact('guest'));
    }
  
}
