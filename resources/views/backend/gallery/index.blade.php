@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-header">
                    <strong>Project&nbsp;</strong>
                    <a class="btn btn-primary pull-right" href="{{route('admin.project.create')}}" role="button">Add Project</a>

                </div><!--card-header-->

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Feature Image</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Option</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

    <script type="text/javascript">
        $(function () {

            var table = $('#villadatatable').DataTable({
                processing: false,
                ajax: "{{route('admin.project.getDetails')}}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'project_name', name: 'project_name'},
                    {data: 'status', name: 'status'},
                    {data: 'feature_images', name: 'feature_images'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>



@endsection
