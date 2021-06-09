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
    public function index(Request $request)
    {
        $projects = Projects::where('status',1)->get();

        if (is_mobile($request->header('user-agent')) != true)
        {
            return view('frontend.projects',[
                'projects' => $projects
            ]);
        }else{
            return view('frontend.mobile_connectivity.projects',[
                'projects' => $projects
            ]);
        }
    }

    public function project_item($id)
    {
        $project = Projects::where('id',$id)->get();
        return view('frontend.mobile_connectivity.project_item',[
            'project' => $project
        ]);
    }
}
