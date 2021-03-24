<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FileManager;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Projects;
class ProjectController extends Controller
{
    public function index()
    {
        return view('backend.projects.index');
    }


    public function store(Request $request)
    {
        $projects = new Projects;
        $projects->project_name = $request->project_name;
        $projects->location = $request->location;
        $projects->description = $request->description;
        $projects->images = json_encode($request->images);
        $projects->status = $request->status;
        if($request->feature_image)
        {
          $imageFiles = FileManager::where('id',$request->feature_image)->first();

          $projects->feature_images = $imageFiles->file_name;
        }
        $projects->status = $request->status;
        $projects->save();
        return redirect()->route('admin.projects.index');
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
                $btn = '<a href="'.route('admin.projects.edit',$row->id).'" class="edit btn btn-primary btn-sm" style="margin-right: 10px"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = '<a href="'.route('admin.project.delete',$row->id).'" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete </a>';
                return  $btn.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function edit($id)
    {
        $projedtDetails = Projects::where('id',$id)->first();

        return view('backend.projects.edit',[
            'projectDetails' => $projedtDetails
        ]);
    }

    public function update(Request $request)
    {

        if($request->feature_image)
        {
            $imageFiles = FileManager::where('id',$request->feature_image)->first();

            $featureimgs = $imageFiles->file_name;
        }else{
            $featureimgs = $request->feature_image;
        }



        Projects::where('id',$request->item_id)->update([
           'project_name' => $request->project_name,
           'description' => $request->description,
           'location' => $request->location,
           'images' => json_encode($request->images),
           'feature_images' => $featureimgs,
           'status' => $request->status,
        ]);
        return back();
    }

    public function create()
    {
        return view('backend.projects.creator');
    }
}
