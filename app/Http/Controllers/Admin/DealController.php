<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DealController extends Controller
{
  public function index()
  {
    return view('admin/deals/index');
  }

  public function dealNew()
  {
    return view('admin/deals/deal-new');
  }
}
