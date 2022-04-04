<?php

namespace App\Http\Controllers\Web\Public;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  /**
   ** Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   * Todo: Display a listing of the resource.
   */
  public function index()
  {
    return view('pages.home', [
      'title' => 'Welcome to Nitro Tech Asia - Attendance',
    ]);
  }
}
