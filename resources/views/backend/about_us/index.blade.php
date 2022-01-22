@extends('layouts.backend')

@section('css')
    
@endsection

@section('body')
<div class='modal fade' id='manage_AboutUs_modal' tabindex='-1' role='dialog' aria-labelledby='AboutUs_modal' aria-hidden='true'>
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
                        <label>Title Arabic</label>
                        <input required type="text" class="form-control" id="title_ar" name="title_ar" title="title_ar" placeholder="tilte_ar">
                    </div>
                    <div class="form-group">
                        <label>Sub Title</label>
                        <input required type="text" class="form-control" id="sub_title" name="sub_title" title="sub_title" placeholder="sub_title">
                    </div>
                    <div class="form-group">
                        <label>Sub Title Arabic</label>
                        <input required type="text" class="form-control" id="sub_title_ar" name="sub_title_ar" title="sub_title_ar" placeholder="sub_title_ar">
                    </div>
                    <div class="form-group">
                        <label>Why Cheose Us</label>
                        <textarea required class="form-control" id="why_cheose_us" name="why_cheose_us" title="why_cheose_us" placeholder="why_cheose_us"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Why Cheose Us Arabic</label>
                        <textarea required class="form-control" id="why_cheose_us_ar" name="why_cheose_us_ar" title="why_cheose_us_ar" placeholder="why_cheose_us_ar"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Our Mission</label>
                        <textarea required class="form-control" id="our_mission" name="our_mission" title="our_mission" placeholder="our_mission"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Our Mission Arabic</label>
                        <textarea required class="form-control" id="our_mission_ar" name="our_mission_ar" title="our_mission_ar" placeholder="our_mission_ar"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Our Vision</label>
                        <textarea required class="form-control" id="our_vision" name="our_vision" title="our_vision" placeholder="our_vision"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Our Vision Arabic</label>
                        <textarea required class="form-control" id="our_vision_ar" name="our_vision_ar" title="our_vision_ar" placeholder="our_vision_ar"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Our Strategy</label>
                        <textarea required class="form-control" id="our_strategy" name="our_strategy" title="our_strategy" placeholder="our_strategy"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Our Strategy Arabic</label>
                        <textarea required class="form-control" id="our_strategy_ar" name="our_strategy_ar" title="our_strategy_ar" placeholder="our_strategy_ar"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Our Values</label>
                        <textarea required class="form-control" id="our_values" name="our_values" title="our_values" placeholder="our_values"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Our Values Arabic</label>
                        <textarea required class="form-control" id="our_values_ar" name="our_values_ar" title="our_values_ar" placeholder="our_values_ar"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Main Image</label>
                        <input type="file" class="form-control" id="main_image" name="main_image" title="main_image" placeholder="main_image">
                    </div>
                    <div class="form-group">
                        <label>Our Strategy Image</label>
                        <input type="file" class="form-control" id="our_strategy_image" name="our_strategy_image" title="our_strategy_image" placeholder="our_strategy_image">
                    </div>
                    <div class="form-group">
                        <label>Our Values Image</label>
                        <input type="file" class="form-control" id="our_values_image" name="our_values_image" title="our_values_image" placeholder="our_values_image">
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
        <a id="add_AboutUs" href="javascript:void(0)"><i class="fa fa-plus"></i> Edit Aboutus</a>
    </div>
    <div class="card-body">
        <table id="AboutUs_table" class="table dt-table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Images</th>
                    {{-- <th class="no-content"></th> --}}
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
                var table = $('#AboutUs_table').DataTable({
                    processing: true,
                    serverSide: true,
                    scrollX: true,
                    stateSave: false,
                    rowId: 'id',
                    "ajax": {
                        "url": '{{route('about_us_index')}}',
                        "dataSrc": "data.data"
                    },
                    "columns": [
                        { "data": "id", "name": "id"},
                        { "data": "title", "name": "title"},
                        { "data": "sub_title", "name": "sub_title"},
                        { "data": "main_image", "name": "main_image" ,
                            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                                var html = '';
                                if(oData.main_image || oData.our_strategy_image || oData.our_values_image) {
                                    if(oData.main_image)
                                    html += "<a target='_blank' href='"+oData.main_image+"'>Main Image</a>,";
                                    if(oData.our_strategy_image)
                                        html += "<a target='_blank' href='"+oData.our_strategy_image+"'>Strategy Image</a>,";
                                    if(oData.our_values_image)
                                        html += "<a target='_blank' href='"+oData.our_values_image+"'>Value Image</a>,";
                                } else 
                                    html = "<span class='badge badge-danger'>No Images</span>";
                                $(nTd).html(html);
                            }
                        },
                        // { "data": "id", "name": "id",
                        //     fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                        //         var html = "";
                        //         html += "<a title='Edit' href='javascript:void(0)' class='edit'><i class='fa fa-edit'></i></a>&nbsp;";
                        //         html += "<a title='Delete' href='javascript:void(0)' class='delete'><i class='fa fa-trash'></i></a>";
                        //         $(nTd).html("<span class='action-column'>"+html+"</span>");
                        //     }
                        // },
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

           

            $('#add_AboutUs').on('click', function () {

                var modal = $('#manage_AboutUs_modal').clone();
                var action = '{{route('save_about_us')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('About Us');
                modal.execModal({
                    progressBar: 'progress_bar',
                    progressText: 'progress_text',
                }, function (response) {
                    //console.log(response);
                    table.draw();

                }, function (response) {

                }, function (dialog) {
                    dialog.find('#title').val("{{$AboutUs->title}}");
                    dialog.find('#title').val("{{$AboutUs->title_ar}}");
                    dialog.find('#sub_title').val("{{$AboutUs->sub_title}}");
                    dialog.find('#sub_title').val("{{$AboutUs->sub_title_ar}}");
                    dialog.find('#why_cheose_us').val("{{$AboutUs->why_cheose_us}}");
                    dialog.find('#why_cheose_us').val("{{$AboutUs->why_cheose_us_ar}}");
                    dialog.find('#our_mission').val(`{{$AboutUs->our_mission}}`);
                    dialog.find('#our_mission').val(`{{$AboutUs->our_mission_ar}}`);
                    dialog.find('#our_values').val(`{{$AboutUs->our_values}}`);
                    dialog.find('#our_values').val(`{{$AboutUs->our_values_ar}}`);
                    dialog.find('#our_strategy').val(`{{$AboutUs->our_strategy}}`);
                    dialog.find('#our_strategy').val(`{{$AboutUs->our_strategy_ar}}`);
                });

            });

            $(document).on("click", ".edit", function () {

                var data = table.row($(this).closest('tr')).data();
                var modal = $('#manage_AboutUs_modal').clone();
                var action = '{{route('save_sub_category')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Edit Sub Category');
                modal.execModal({
                    progressBar: 'progress_bar',
                    progressText: 'progress_text',
                }, function (response) {
                        table.draw();

                }, function (response) {

                }, function (dialog) {
                        dialog.find('#id').val(data.id);
                        dialog.find('#name').val(data.name);
                        dialog.find('#category_id option[value=' + data.category_id + ']').attr('selected', 'selected');
                  });
            });

            $(document).on("click", ".delete", function () {
                var data = table.row($(this).closest('tr')).data();
                var url = '{{route('delete_sub_category',['id'=>'#id'])}}';
                url = url.replace('#id',data.id);
                
                warningBox("Are you sure to delete" + data.name +"</b>?", function () {
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