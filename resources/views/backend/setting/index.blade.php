@extends('layouts.backend')

@section('css')
    
@endsection

@section('body')

<div class="col-xl-12 col-lg-12 col-sm-12">
    <div class="card">
    <div class="card-header">
        <a id="add_product" href="javascript:void(0)"> Site Setting</a>
    </div>
    <div class="card-body">
        <form method="post" action="{{route('app_setting_save')}}">
        {{ csrf_field() }}
        <div class="row">
            <div class="form-group col-md-6">
                <label class="form-label">Address</label>
                <input type="text" id="address" name="address" placeholder="Address" value="{{$appSetting->address}}" class="form-control" />
            </div>
            <div class="form-group col-md-6">
                <label class="form-label">Telegram Link</label>
                <input type="text" id="telegram_link" name="telegram_link" placeholder="Telegram Link" value="{{$appSetting->telegram_link}}" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label class="form-label">Primary Phone</label>
                <input type="text" id="primary_phone" name="primary_phone" placeholder="Primary Phone" value="{{$appSetting->primary_phone}}" class="form-control" />
            </div>
            <div class="form-group col-md-6">
                <label class="form-label">Secondary Phone</label>
                <input type="text" id="secondary_phone" name="secondary_phone" placeholder="Secondary Phone" value="{{$appSetting->secondary_phone}}" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label class="form-label">Whatsapp Number</label>
                <input type="text" id="whatsapp_number" name="whatsapp_number" placeholder="Whatsapp Number" value="{{$appSetting->whatsapp_number}}" class="form-control" />
            </div>
            <div class="form-group col-md-6">
                <label class="form-label">Support Email</label>
                <input type="text" id="support_email" name="support_email" placeholder="Support Email" value="{{$appSetting->support_email}}" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label class="form-label">Sales Email</label>
                <input type="text" id="sales_email" name="sales_email" placeholder="Sales Email" value="{{$appSetting->sales_email}}" class="form-control" />
            </div>
            <div class="form-group col-md-6">
                <label class="form-label">Customer Service Email</label>
                <input type="text" id="customer_service_email" name="customer_service_email" value="{{$appSetting->customer_service_email}}" placeholder="Customer Service Email" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Save</button>
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