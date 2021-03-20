@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Blog Post &nbsp; &nbsp;</strong>
                    <a class="btn btn-primary" href="" role="button">Add Blog Post</a>
                </div><!--card-header-->

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Category</th>
                            <th scope="col">User</th>
                            <th scope="col">Created At</th>
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
                ajax: "",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'name'},
                    {data: 'slug', name: 'description'},
                    {data: 'category_id', name: 'category_id'},
                    {data: 'user_id', name: 'user_id'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>



@endsection
