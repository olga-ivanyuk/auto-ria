<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::all();
        return view('ads.index', compact(['ads']));
    }
}

//    public function show(Request $request)
//    {
//        $ad = Ad::where('id', '=', $request->id)->first();
//        return view('ads.show', compact(['ad']));
//    }
//
//    public function create()
//    {
//        return view('ads.create');
//    }
//}
