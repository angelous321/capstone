<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

class AdminController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function adminPanel()
  {

      $admin = User::where('user_role','0')->count();
      $guest= User::where('user_role','1')->count();
      $frontdesk= User::where('user_role','2')->count();
      $cashier= User::where('user_role','3')->count();
      return view('admin.admin-panel', compact('admin','guest','frontdesk','cashier'));
  }

  public function admintList()
  {
    $user = User::where('user_role','0')->first();
    $userrole = $user->user_role;
      if ($userrole == '$user'){
        $admin = User::all();
      } else {
        $admin = User::where('user_role', $userrole)->get();
      }

    return view('admin.admin-view-guest', compact('admin'));
  }

  public function guestList()
  {
    $user = User::where('user_role','1')->first();
    $userrole = $user->user_role;
      if ($userrole == '$user'){
        $guest = User::all();
      } else {
        $guest = User::where('user_role', $userrole)->get();
      }

    return view('admin.admin-view-guest', compact('guest'));
  }

  public function frontdeskList()
  {
    $user = User::where('user_role','2')->first();
    $userrole = $user->user_role;
      if ($userrole == '$user'){
        $frontdesk = User::all();
      } else {
        $frontdesk = User::where('user_role', $userrole)->get();
      }

    return view('admin.admin-view-frontdesk', compact('frontdesk'));
  }


}
