<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Deal;

class FrontPageController extends Controller
{
    public function show()
    {
        $deals = Deal::all()->toArray();
        return view('frontpage', [
            'deals' => $deals
        ]);
    }
}
