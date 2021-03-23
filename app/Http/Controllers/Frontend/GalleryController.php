<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use DB;
class GalleryController extends Controller
{
       /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = Gallery::paginate(8);

        dd($data);



        $products = Gallery::skip(0)->take(10)->get(); //get first 10 rows
//        $products = Gallery::skip(10)->take(10)->get(); //get next 10 rows

        dd($products);

        return view('frontend.gallery');
    }
}
