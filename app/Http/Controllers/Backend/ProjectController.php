<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;

class ProjectController extends Controller
{
    public function index()
    {
        return view('backend.projects.index');
    }

    public function getDetails()
    {

    }

    public function edit($id)
    {

    }

    public function create()
    {

    }
}
