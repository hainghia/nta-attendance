<?php

namespace App\Http\Controllers\Web\Private;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('private.pages.users.login', [
      'title' => 'đăng nhập hệ thống'
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email:rfc,dns',
      'password' => 'required',
    ]);
    dd($request->input());
    try {
      Auth::attempt([
        'email' => $request->input('email'),
        'password' => $request->input('password')
      ], $request->input('remember'));

      Session::flash('success', 'Đăng nhập thành công');
      return to_route('index');
    } catch (\Exception $err) {
      Session::flash('error', $err->getMessage());
      return false;
    }
  }
}
