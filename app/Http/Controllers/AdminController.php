<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

  public function guestList()
  {
    $users = User::all();
        return view('admin.admin-view-guest', ['users' => $users]);

      //return view('admin.admin-view-guest');
  }
  public function viewguestList(){
        $users = User::all();
        return view('modal.view-guest', ['users' => $users]);
  }


}
