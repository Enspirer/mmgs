@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-6">
                            <div class="container">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input type="text" class="form-control" name="project_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control">
                                        <option value="1">Enabled</option>
                                        <option value="0">Disabled</option>
                                    </select>
                                </div>

                                @include('backend.file_manager.file_manager')
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="11" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>

                </form>

            </div>
        </div>
    </div>

    <script type="text/javascript">

        Dropzone.autoDiscover = false;

        var myDropzone = new Dropzone(".dropzone", {
            autoProcessQueue: false,
            maxFilesize: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        });

        $('#uploadFile').click(function(){
            myDropzone.processQueue();
        });

    </script>

@endsection
