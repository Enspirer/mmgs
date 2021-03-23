<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectsController extends Controller
{
      /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projects = Projects::where('status',1)->get();

        return view('frontend.projects',[
            'projects' => $projects
        ]);
    }
}
