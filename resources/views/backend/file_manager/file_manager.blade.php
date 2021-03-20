<div class="form-group">
    <label class="form-label">Upload Images</label>
    <div id="select_img" type="text" class="" style="border-color: grey;color: grey; padding: 10px;text-align: center;border-style: dashed;border-width: 1px;">
        <br>
        <div class="" id="upload_content">
            <h3>Upload Images</h3>
            <small>Upload Images</small>
        </div>

        <div class="" id="image_content" style="display: none">
            <input type="hidden" name="image" id="image">
            <img src="" id="image_preview" style="height: 250px;">
        </div>

    </div>
</div>


<!-- Modal -->
<div class="modal fade  bd-example-modal-lg" id="file_manager" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">File Manager</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-hover" id="villadatatable" style="width:100%">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">File</th>
                                <th scope="col">File Name</th>
                                <th scope="col">URL</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody style="" >

                            </tbody>
                        </table>
                    </div>
                </div><!--row-->
            </div>
        </div>
    </div>
</div>

<script>
    $("#select_img").click(function(){
        distroy_table();
        load_tables();
        $('#file_manager').modal('show')
        console.log('aaa');

    });

    $('#myModal').on('hidden.bs.modal', function (e) {
        console.log('assssseeeaa');
    })

    function select_item(id,url) {
        $('#file_manager').modal('hide');
        $('#upload_content').hide();
        $('#image_content').show();
        $('#image').val(id);
        $('#image_preview').attr('src',url);
    }

    function distroy_table() {
        var table = $('#villadatatable').DataTable();
        table.destroy();
    }

    function load_tables() {
        var table = $('#villadatatable').DataTable({
            processing: true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw" style="color: greenyellow"></i>'},
            responsive: true,
            autoWidth: true,
            scrollY: "300px",
            order: [[ 0, "desc" ]],
            bAutoWidth: false,
            scrollCollapse: true,
            ajax: "{{route('admin.get_dialog_data.json')}}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'file', name: 'file',orderable: false, searchable: false},
                {data: 'file_name', name: 'file_name',orderable: false, searchable: false},
                {data: 'url', name: 'url',orderable: false, searchable: false},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    }


    function autoajust() {
        var table = $('#villadatatable').DataTable();
        $('#villadatatable').css( 'display', 'block' );
        table.columns.adjust().draw();
    }

    //    autoajust();

    //    $(function () {
    //        load_tables()
    //    });
</script>