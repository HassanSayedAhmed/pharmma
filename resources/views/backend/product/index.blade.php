@extends('layouts.backend')

@section('css')
    
@endsection

@section('body')
<div class='modal fade' id='manage_product_modal' tabindex='-1' role='dialog' aria-labelledby='category_modal' aria-hidden='true'>
    <form action="" method="post" enctype='multipart/form-data'>
        {{ csrf_field() }}
        <div class='modal-dialog' role='document'>
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
                        <label>Name</label>
                        <input required type="text" class="form-control" id="name" name="name" title="Name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Name Arabic</label>
                        <input required type="text" class="form-control" id="name_ar" name="name_ar" title="Name Arabic" placeholder="Name Arabic">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input required type="text" class="form-control" id="description" name="description" title="Description" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label>Description Arabic</label>
                        <input required type="text" class="form-control" id="description_ar" name="description_ar" title="Description Arabic" placeholder="Description Arabic">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" id="image" name="image" title="Image">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        {!! Form::select('category_id_filter', array(""=>__("Select Category"))+$categories, null, array('id'=> 'category_id_filter', 'title'=> 'Category', 'class'=>'form-control')) !!}
                    </div>
                    <div class="form-group" id="sub_category_div">
                        <label>Sub Category</label>
                        {!! Form::select('category_id', array(""=>__("Select Sub Category"))+$subCategories, null, array('id'=> 'category_id', 'required'=>'required', 'title'=> 'Sub Category', 'class'=>'form-control')) !!}
                    </div>
                    {{-- old category with sub category --}}
                    {{-- <div class="form-group">
                        <label>Category</label>
                        <select  name="category_id" id="category_id" title='Category' class='form-control'>
                            <option value="">Please Select</option>
                            @foreach ($categories as $category)
                                <optgroup label="{{$category->name}}">
                                <option style="color: green;" value="{{$category->id}}">{{$category->name}}</option>
                                @foreach ($category->subCategory as $sub)
                                    <option value="{{$sub->id}}">{{$sub->name}}</option>
                                @endforeach
                              </optgroup>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="form-group">
                        <label>Covid</label>
                        <select class="form-control" name="type" id="type">
                            <option value="1">Yes</option>
                            <option value="0" selected>No</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div id='progress_bar' style="background-color: green; width: 0%; height: 2px;"></div>
                </div>
                <div class='modal-footer'>
                    <button type='submit' class='btn btn-primary' id='action'>Submit <span id="progress_text"></span></button>
                    <button type='button' class='btn btn-light' id='close' data-dismiss='modal'>Cancel</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="col-xl-12 col-lg-12 col-sm-12">
    <div class="card">
    <div class="card-header">
        <a id="add_product" href="javascript:void(0)"><i class="fa fa-plus"></i> Add Product</a>
    </div>
    <div class="card-body">
        <table id="product_table" class="table dt-table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Covid</th>
                    <th>Active</th>
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
                var table = $('#product_table').DataTable({
                    processing: true,
                    serverSide: true,
                    scrollX: true,
                    stateSave: false,
                    rowId: 'id',
                    "ajax": {
                        "url": '{{route('product_index')}}',
                        "dataSrc": "data.data"
                    },
                    "columns": [
                        { "data": "id", "name": "id"},
                        { "data": "name", "name": "name"},
                        { "data": "category_name", "name": "category_name"},
                        { "data": "type", "name": "type" ,
                            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                                var html = '';
                                if(oData.type == 1)
                                    html = "<span class='badge badge-success'>Yes</span>";
                                else 
                                    html = "<span class='badge badge-danger'>No</span>";
                                $(nTd).html(html);
                            }
                        },
                        { "data": "active", "name": "active" ,
                            fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                                var html = '';
                                if(oData.active == 1)
                                    html = "<span class='badge badge-success'>Yes</span>";
                                else 
                                    html = "<span class='badge badge-danger'>No</span>";
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

           

            $('#add_product').on('click', function () {

                var modal = $('#manage_product_modal').clone();
                var action = '{{route('save_product')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Add Product');
                modal.execModal({
                    progressBar: 'progress_bar',
                    progressText: 'progress_text',
                }, function (response) {
                    table.draw();
                }, function (response) {

                }, function (dialog) {
                    $(document).on("change", "#category_id_filter", function () {

                        var url = '{{route('get_sub_category',['id'=>'#id'])}}';

                        if(dialog.find('#category_id_filter').val() > 0)
                            url = url.replace('#id',dialog.find('#category_id_filter').val());
                        else
                            url = url.replace('#id',-1);
                        var html = "";
                        $.ajax({
                            type: "GET",
                            url: url,
                            contentType: "application/json; charset=utf-8",
                            datatype: "json",
                            success: function (data) {

                                dialog.find('#sub_category_div').html('');
                                html += `
                                    <label>Sub Category</label>
                                    <select class="form-control" id="category_id" name="category_id">`;

                                Object.keys(data).forEach(function(key) {
                                    console.log(key, data[key]);
                                    html += `<option value="${key}">${data[key]}</option>`;
                                });

                                html += `</select>`;

                                dialog.find('#sub_category_div').append(html);
                            },
                            error: function () {
                                alert("Dynamic content load failed.");
                            }
                        });
                        
                    });
                });

            });

            $(document).on("click", ".edit", function () {

                var data = table.row($(this).closest('tr')).data();
                var modal = $('#manage_product_modal').clone();
                var action = '{{route('save_product')}}';
                modal.find('form').attr('action', action);
                modal.find('#modal_title').text('Edit Product');
                modal.execModal({
                    progressBar: 'progress_bar',
                    progressText: 'progress_text',
                }, function (response) {
                        table.draw();

                }, function (response) {

                }, function (dialog) {
                        dialog.find('#id').val(data.id);
                        dialog.find('#name').val(data.name);
                        dialog.find('#name_ar').val(data.name_ar);
                        dialog.find('#description').val(data.description);
                        dialog.find('#description_ar').val(data.description_ar);
                        dialog.find('#category_id option[value=' + data.category_id + ']').attr('selected', 'selected');
                        dialog.find('#covid option[value=' + data.covid + ']').attr('selected', 'selected');
                        dialog.find('#type option[value=' + data.type + ']').attr('selected', 'selected');

                        $(document).on("change", "#category_id_filter", function () {

                            var url = '{{route('get_sub_category',['id'=>'#id'])}}';

                            if(dialog.find('#category_id_filter').val() > 0)
                                url = url.replace('#id',dialog.find('#category_id_filter').val());
                            else
                                url = url.replace('#id',-1);
                            var html = "";
                            $.ajax({
                                type: "GET",
                                url: url,
                                contentType: "application/json; charset=utf-8",
                                datatype: "json",
                                success: function (data) {

                                    dialog.find('#sub_category_div').html('');
                                    html += `
                                        <label>Sub Category</label>
                                        <select class="form-control" id="category_id" name="category_id">`;

                                    Object.keys(data).forEach(function(key) {
                                        console.log(key, data[key]);
                                        html += `<option value="${key}">${data[key]}</option>`;
                                    });

                                    html += `</select>`;

                                    dialog.find('#sub_category_div').append(html);
                                },
                                error: function () {
                                    alert("Dynamic content load failed.");
                                }
                            });

                        });

                    });
            });

            $(document).on("click", ".delete", function () {
                var data = table.row($(this).closest('tr')).data();
                var url = '{{route('delete_product',['id'=>'#id'])}}';
                url = url.replace('#id',data.id);
                
                warningBox("Are you sure to delete " + data.name +"</b>?", function () {
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