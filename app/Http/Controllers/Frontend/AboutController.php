<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
     /**
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if (is_mobile($request->header('user-agent')) != true)
        {
            return view('frontend.about');
        }else{
            return view('frontend.mobile_connectivity.about');

        }
    }
}
