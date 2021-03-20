@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card" style="">
                <div class="card-header">
                    <form action="{{route('admin.file_manager.store')}}" name="file" class="dropzone" id="myAwesomeDropzone">
                        {{csrf_field()}}
                    </form>

                </div><!--card-header-->
                <div class="card-body">
                    <table class="table table-hover" id="villadatatable">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">File</th>
                            <th scope="col">File Name</th>
                            <th scope="col">File Path</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="width: 600px;max-width: none;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 18px;font-weight: 400;">Are you sure delete this item</p>
                            <div class="card">
                                <div class="row"><br>
                                    <div class="col-md-4">
                                        <img id="my_image" style="height: 120px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="container" style="padding-top: 20px;padding-bottom: 10px;">

                                            <b>
                                                <div id="item_cart_title_delete"> </div>
                                            </b>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Phasellus porttitor cursus velit, ut imperdiet libero blandit a.
                                                Donec vitae tristique libero, ut laoreet justo.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        function load_tables() {
            var table = $('#villadatatable').DataTable({
                processing: true,
                "language": {
                    processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw" style="color: greenyellow"></i>'},
                responsive: true,
                ajax: "{{route('admin.file_manager.json')}}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'file', name: 'file',orderable: false, searchable: false},
                    {data: 'file_name', name: 'file_name'},
                    {data: 'url', name: 'url'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        }

        $(function () {
            load_tables()
        });
        function delete_item(id,item_name,url) {
            $("#item_name_title").text(item_name);
            $("#item_cart_title_delete").text(item_name);
            $('#my_image').attr('src',url);
            $('#myModal').modal('show')
        }

        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            init: function () {
                this.on('success', function( file, resp ){
                    $('#villadatatable').DataTable().ajax.reload();
                });
            },
        };


    </script>
@endsection
