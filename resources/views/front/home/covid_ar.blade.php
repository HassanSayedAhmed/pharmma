@extends('layouts.front_ar')
@section('css')
    
@endsection

@section('body')
<section id="page-title" class="pg-title-fix">

    <div class="container clearfix">
        <h1>كوفيد-19  </h1>
        <span class="breadcrumb_ar">
            احصل علي ما تحتاجه
        </span>
    </div>

</section><!-- #page-title end -->

    <!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row gutter-40 col-mb-80">
                <!-- Post Content
                ============================================= -->
                <div class="postcontent col-lg-12 order-lg-last">

                    <!-- Shop
                    ============================================= -->
                    <div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">
                        <div class="oc-item row">
                            @foreach($products as $product)
                                <div class="entry event mb-3 col-lg-4">
                                    <div class="grid-inner row align-items-center g-0 p-4">
                                        <div class="col-md-12 mb-md-0">
                                            <a href="https://api.whatsapp.com/send/?phone=%2B201551364964&text={{$product->name_ar}} Available" class="entry-image">
                                                @if($product->image)
                                                    <img src="{{$product->image}}" alt="{{$product->name_ar}}">
                                                @else
                                                    <img src="{{asset('uplaods/defaults/defualt_medicine.jpg')}}" alt="{{$product->name_ar}}">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="entry-title title-xs">
                                                <h3 class="text-center"><a href="{{route('front_product_detail',['product'=>$product->id])}}">{{$product->name_ar}}</a></h3>
                                            </div>
                                            <div class="entry-content">
                                                <a href="{{route('front_product_detail',['product'=>$product->id])}}" class="btn btn-infoss btn-sm unique-btn">المزيد</a>
                                                <a href="https://api.whatsapp.com/send/?phone=%2B201551364964&text={{$product->name_ar}} Available" class="btn btn-dangerss btn-sm unique-btn2">واتساب</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                      

                    </div><!-- #shop end -->

                </div><!-- .postcontent end -->

                
            </div>

        </div>
    </div>
</section><!-- #content end -->

@endsection

@section('scripts')
    
@endsection