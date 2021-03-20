<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Projects;
class ProjectController extends Controller
{
    public function index()
    {
        return view('backend.projects.index');
    }

    public function delete($id)
    {
        Projects::where('id',$id)->delete();
        return back();
    }

    public function getDetails()
    {
        $category = Projects::select(['id', 'project_name', 'status','feature_images','created_at']);

        return Datatables::of($category)
            ->editColumn('status',function ($row){
                if ($row->status == 1)
                {
                    return 'Enabled';
                }else{
                    return 'Disabled';
                }
            })

            ->addColumn('action', function($row){
                $btn = '<a href="" class="edit btn btn-primary btn-sm" style="margin-right: 10px"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = '<a href="'.route('admin.project.delete',$row->id).'" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete </a>';
                return  $btn.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function edit($id)
    {

    }

    public function create()
    {
        return view('backend.projects.creator');
    }
}
