@extends('layouts.front')
@section('css')
    
@endsection

@section('body')
<!-- Single product view -->
<div class="entry event " style="margin:20px 20px 0px">
								<div class=" row align-items-center"  style='background-color:white'>
									<div class="col-md-6" style="display:flex;justify-content:center">
										<a href="https://api.whatsapp.com/send/?phone=%2B201551364964&text={{$product->name}} Available" class="product-image-size-single">
											@if($product->image)
											<img src="{{$product->image}}"/>
											@else 
											<img src="{{asset('uploads/defaults/defualt_medicine.jpg')}}" />
											@endif
										</a>
									</div>
									<div class="row col-md-6">
										<div class="col-12 entry-title title-xs">
											<p class="text-center row" ><span class="col-3" style="text-transform:capitalize;">name</span>   <a href="#" class="col-9">{{$product->name}}</a></p>
										</div>
										<div class="col-12 entry-title title-xs">
                                        <p class="text-center row" ><span class="col-3" style="text-transform:capitalize;">type</span>   <a href="#" class="col-9">Anitviral</a></p>
										</div>
										<div class="col-12 entry-title title-xs">
											<a href="https://api.whatsapp.com/send/?phone={{$appSetting->whatsapp_number}}&text={{$product->name}} Available" class="btn btn-success btn-sm unique-btn" style="position: relative;top: 3.5rem;left: 14rem;">WhatsApp</a>
											<a href="{{$appSetting->telegram_link}}" class="btn btn-sm unique-btn" style="position: relative;top: 3.5rem;left: 16rem;background-color:#2da5d8;color:white">Telegram</a>
										</div>
									</div>
								</div>
							</div>
<!-- end of single product-->
<!-- Products
		============================================= -->
		<section id="events">
			<div class="content-wrap pb-0">
				<div class="container">
					<div class="fancy-title title-center title-border topmargin">
						<h3>Related Products</h3>
					</div>
					<div>
						<div class="oc-item row" >
							@foreach ($relatedProducts as $relatedProduct)
							
								<div class="entry event mb-3 col-lg-3">
									<div class="grid-inner row align-items-center g-0 p-4" style="border-radius: 25px">
										<div class="col-md-12 mb-md-0"  style="display:flex;justify-content: space-around;margin-bottom:5px">
											<a href="https://api.whatsapp.com/send/?phone=%2B201551364964&text={{$relatedProduct->name}} Available" class="product-image-size-group">
                                                @if($relatedProduct->image)
                                                <img src="{{$relatedProduct->image}}" />
                                                @else 
                                                <img src="{{asset('uploads/defaults/defualt_medicine.jpg')}}" />
                                                @endif
                                            </a>
										
										</div>
										<div class="col-md-12">
											<div class="entry-title title-xs">
												<h3 class="text-center"><a href="#">{{$relatedProduct->name}}</a></h3>
											</div>
											<div class="entry-content" style="display:flex;justify-content: space-around;margin-bottom:5px">
												<a href="{{route('front_product_detail',['product'=>$relatedProduct->id])}}" class="btn btn-infoss btn-sm unique-btn">More</a> 
												<a href="https://api.whatsapp.com/send/?phone=%2B201551364964&text={{$relatedProduct->name}} Available" class="btn btn-dangerss btn-sm unique-btn2">WhatsApp</a>
											</div>
										</div>
									</div>
								</div>
							@endforeach
							
						</div>
						
					</div>
				</div>
			</div>
		</section><!-- #events end -->
        @endsection

@section('scripts')
    
@endsection