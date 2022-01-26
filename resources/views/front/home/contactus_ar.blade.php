@extends('layouts.front_ar')
@section('css')
    
@endsection

@section('body')
<section id="page-title" class="pg-title-fix">

    <div class="container clearfix">
        <h1>اتصل بنا</h1>
        <span class="breadcrumb_ar">
            تواصل معنا بأي وسيلة تناسبك
        </span>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row align-items-stretch col-mb-50 mb-0">
                <!-- Contact Form
                ============================================= -->
                <div class="col-lg-6">

                    <div class="fancy-title title-border">
                        <h3>ارسل بريد الكتروني</h3>
                    </div>

                    <div class="form-widget">

                        <div class="form-result"></div>

                        <form class="mb-0" id="template-contactform" name="template-contactform" action="{{route('front_contactus_save')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-name">الإسم <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-email">البريد الإلكتروني <small>*</small></label>
                                    <input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-phone">رقم الهاتف</label>
                                    <input type="text" id="template-contactform-phone" name="phone" value="" class="sm-form-control" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-md-8 form-group">
                                    <label for="template-contactform-subject">الموضوع <small>*</small></label>
                                    <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="template-contactform-service">الخدمات</label>
                                    <select id="template-contactform-service" name="service" class="sm-form-control">
                                        <option value="">-- اختر --</option>
                                        <option value="Wordpress">Wordpress</option>
                                        <option value="PHP / MySQL">PHP / MySQL</option>
                                        <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                        <option value="Graphic Design">Graphic Design</option>
                                    </select>
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="template-contactform-message">رسالة <small>*</small></label>
                                    <textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30"></textarea>
                                </div>

                                <div class="col-12 form-group d-none">
                                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                </div>

                                <div class="col-12 form-group">

                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                    <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>

                                </div>

                                <div class="col-12 form-group">
                                    <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0 unique-btn">ارسل التعليق</button>
                                </div>
                            </div>

                            <input type="hidden" name="prefix" value="template-contactform-">

                        </form>
                    </div>

                </div><!-- Contact Form End -->
            
            <!-- Contact Info
            ============================================= -->
            <div class="row col-mb-50">
                <div class="col-sm-6 col-lg">
                    <div class="feature-box fbox-center fbox-bg fbox-plain fbox-fix-CS">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-map-marker2"></i></a>
                        </div>
                        <div class="fbox-content">
                            {{$appSetting->address}}
                        </div>
                    </div>
                </div>

            

                <div class="col-sm-6 col-lg">
                    <div class="feature-box fbox-center fbox-bg fbox-plain fbox-fix-CS">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-phone3"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>تحدث إلينا<span class="subtitle"><a href="tel:{{$appSetting->primary_phone}}" >{{$appSetting->primary_phone}}</a></span>
                                <span class="subtitle"><a href="tel:{{$appSetting->secondary_phone}}" >{{$appSetting->secondary_phone}}</a></span></h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg">
                    <div class="feature-box fbox-center fbox-bg fbox-plain fbox-fix-CS">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-telegram"></i></a>
                        </div>
                        <div class="fbox-content">
                        <h3><span class="subtitle"><a href="{{$appSetting->telegram_link}}" id="telegram_share" class="mobileShare" title="inviteFriends" alt="telegram_share">اتصل بنا من خلال تليجرام</a></span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg">
                    <div class="feature-box fbox-center fbox-bg fbox-plain fbox-fix-CS">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-whatsapp"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3><span class="subtitle"><a href="https://api.whatsapp.com/send/?phone={{$appSetting->whatsapp_number}}&text=Hi Available">اتصل بنا من خلال واتساب</a></span></h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg">
                    <div class="feature-box fbox-center fbox-bg fbox-plain fbox-fix-CS">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-email3"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>البريد الإلكتروني<span class="subtitle"><a href="mailto:{{$appSetting->sales_email}}">المبيعات</a></span>
                                <span class="subtitle"><a href="mailto:{{$appSetting->customer_service_email}}">خدمة العملاء</a></span>
                        </div>
                    </div>
                </div>
            </div><!-- Contact Info End -->

        </div>
    </div>
</section><!-- #content end -->
@endsection

@section('scripts')
    
@endsection