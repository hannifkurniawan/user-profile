<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
      return view('pages.index');
    }

    public function register()
    {
      return view('pages.register');
    }
}
