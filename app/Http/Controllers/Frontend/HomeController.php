<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if (is_mobile($request->header('user-agent')) != true)
        {
            return view('frontend.index');
        }else{
            return view('frontend.mobile_connectivity.index');

        }

    }
}
