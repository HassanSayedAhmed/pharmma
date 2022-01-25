@extends('layouts.backend')

@section('css')
    
@endsection

@section('body')

<div class="col-xl-12 col-lg-12 col-sm-12">
    <div class="card">
    <div class="card-header">
        <a id="add_product" href="javascript:void(0)"><i class="fa fa-plus"></i> Add Product</a>
    </div>
    <div class="card-body">
        <form method="post" action="{{route('app_setting_save')}}">
        {{ csrf_field() }}
        <div class="row">
            <div class="form-group col-md-6">
                <label class="form-label"></label>
                <input type="text" id="" name="" placeholder="" />
            </div>
        </div>
        </form>
    </div>
    </div>
</div>
@endsection

@section('scripts')
   <script>
      
   </script> 
@endsection