@extends('layouts.backend')

@section('css')
    
@endsection

@section('body')
<div class='modal fade' id='manage_HomeSlider_modal' tabindex='-1' role='dialog' aria-labelledby='HomeSlider_modal' aria-hidden='true'>
    <form action="" method="post" enctype='multipart/form-data'>
        {{ csrf_field() }}
        <div class='modal-dialog modal-lg' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='modal_title'></h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class='modal-body'>
                    <input type="hidden" id="id" name="id" value="0"/>
                    <div class="form-group">
                        <label>Title</label>
                        <input required type="text" class="form-control" id="title" name="title" title="title" placeholder="tilte">
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input required type="text" class="form-control" id="title_ar" name="title_ar" title="title_ar" placeholder="tilte_ar">
                    </div>
                    <div class="form-group">
                        <label>Top Title</label>
                        <input required type="text" class="form-control" id="top_title" name="top_title" title="top_title" placeholder="top_title">
                    </div>
                    <div class="form-group">
                        <label>Top Title</label>
                        <input required type="text" class="form-control" id="top_title_ar" name="top_title_ar" title="top_title_ar" placeholder="top_title_ar">
                    </div>
                    <div class="form-group">
                        <label>Sub Title</label>
                        <input required type="text" class="form-control" id="sub_title" name="sub_title" title="sub_title" placeholder="sub_title">
                    </div>
                    <div class="form-group">
                        <label>Sub Title</label>
                        <input required type="text" class="form-control" id="sub_title_ar" name="sub_title_ar" title="sub_title_ar" placeholder="sub_title_ar">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" id="image" name="image" title="image" placeholder="image">
                    </div>
                </div>
                <div>
                    <div id='progress_bar' style="background-color: green; width: 0%; height: 2px;"></div>
                </div>
                <div class='modal-footer'>
                    <button type='submit' class='btn btn-primary' id='action'>@lang('tr.Submit') <span id="progress_text"></span></button>
                    <button type='button' class='btn btn-light' id='close' data-dismiss='modal'>@lang('tr.Cancel')</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="col-xl-12 col-lg-12 col-sm-12">
    <div class="card">
    <div class="card-header">
        <a id="add_HomeSlider" href="javascript:void(0)"><i class="fa fa-plus"></i> Add Home Slider</a>
    </div>
    <div class="card-body">
        <table id="HomeSlider_table" class="table dt-table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Top Title</th>
                    <th>Sub Title</th>
                    <th>Images</th>
                    <th class="no-content"></th>
                </tr>
            </thead>
        </table>
    </div>
    </div>
</div>
@endsection

@section('scripts')
   <script>
        $(document).ready(function(){
                var table = $('#HomeSlider_table').DataTable({
                    processing: true,
                    serverSide: true,
                    scrollX: true,
                    stateSave: false,
                    rowId: 'id',
                    "ajax": {
                        "url": '{{route('home_slider_index')}}',
                        "dataSrc": "data.data"
                    },
                    "columns": [
                        { "data": "id", "name": "id"},
                        { "data": "title", "name": "title"},
                        { "data": "top_title", "name": "top_title"},
                        { "data": "sub_title", "name": "sub_title"},
                        { "data": "image", "name": "image" ,
                            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                                var html = '';
                                if(oData.image)
                                    html += "<a target='_blank' href='"+oData.image+"'>Main Image</a>";
                                else 
                                    html = "<span class='badge badge-danger'>No Images</span>";
                                $(nTd).html(html);
                            }
                        },
                        { "data": "id", "name": "id",
                            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                                var html = "";
                                html += "<a title='Edit' href='javascript:void(0)' class='edit'><i class='fa fa-edit'></i></a>&nbsp;";
                                html += "<a title='Delete' href='javascript:void(0)' class='delete'><i class='fa fa-trash'></i></a>";
                                $(nTd).html("<span class='action-column'>"+html+"</span>");
                            }
                        },
                    ]
                });

                $(".dataTables_filter").hide();

                $('#search_button').on( 'click', function () {
                    table.search($("#text_search").val());
                    table.draw();
                } );

                $('#text_search').keyup(function (e){
                    if(e.keyCode == 13)
                        $('#search_button').trigger('click');
                });

                $('#reset_button').on( 'click', function () {
                    $("#text_search").val("");
                    $('#search_button').trigger('click');
            });

           

            $('#add_HomeSlider').on('click', function () {

                var modal = $('#manage_HomeSlider_modal').clone();
                var action = '{{route('save_home_slider')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Add Home Slider');
                modal.execModal({
                    progressBar: 'progress_bar',
                    progressText: 'progress_text',
                }, function (response) {
                    //console.log(response);
                    table.draw();

                }, function (response) {

                }, function (dialog) {
                   
                    
                });

            });

            $(document).on("click", ".edit", function () {

                var data = table.row($(this).closest('tr')).data();
                var modal = $('#manage_HomeSlider_modal').clone();
                var action = '{{route('save_home_slider')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Edit Home Slider');
                modal.execModal({
                    progressBar: 'progress_bar',
                    progressText: 'progress_text',
                }, function (response) {
                        table.draw();

                }, function (response) {

                }, function (dialog) {
                        dialog.find('#id').val(data.id);
                        dialog.find('#title').val(data.title);
                        dialog.find('#title').val(data.title_ar);
                        dialog.find('#top_title').val(data.top_title);
                        dialog.find('#top_title').val(data.top_title_ar);
                        dialog.find('#sub_title').val(data.sub_title);
                        dialog.find('#sub_title').val(data.sub_title_ar);
                  });
            });

            $(document).on("click", ".delete", function () {
                var data = table.row($(this).closest('tr')).data();
                var url = '{{route('delete_home_slider',['id'=>'#id'])}}';
                url = url.replace('#id',data.id);
                
                warningBox("Are you sure to delete" + data.title +"</b>?", function () {
                    $.ajax({
                        type: "GET",
                        url: url,
                        contentType: "application/json; charset=utf-8",
                        datatype: "json",
                        success: function (data) {
                            table.draw();
                        },
                        error: function () {
                            alert("Dynamic content load failed.");
                        }
                    });
                });
            });
		});	
   </script> 
@endsection