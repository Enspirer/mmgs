<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Awards;
use Illuminate\Http\Request;

class AwardsController extends Controller
{
        /**
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $awardsDetails = Awards::get();
        if (is_mobile($request->header('user-agent')) != true)
        {
            return view('frontend.awards');
        }else{
            return view('frontend.mobile_connectivity.awards',[
                'awardsDetails' => $awardsDetails
            ]);
        }
    }
}
