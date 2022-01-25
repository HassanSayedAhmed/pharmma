<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\product;
use App\category;
use App\blog;
use App\HomeSlider;
use App\job;
use Products;
use App\JobWhatWeExpect;
use App\JobRequirements;
use App\JobApplicant;
use App\AboutUs;
use App\ApplicationSetting;

class HomeController extends Controller
{
    public function index()
    {
        $products = product::select('products.*')->get()->take(8)->toArray();
        
        $blogActive = Blog::orderBy('updated_at','desc')->first();
        $blogs = Blog::orderBy('updated_at','desc')->where('id','!=',$blogActive->id)->select('blogs.*')->get()->take(4);

        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $sliders = HomeSlider::orderBy('updated_at','desc')->select('home_sliders.*')->get();

        $appSetting = ApplicationSetting::first();

        return view('front.home.index',compact('products','blogs','blogActive','sliders', 'recentBlogs','appSetting'));
    }
    public function indexAr()
    {
        $products = product::select('products.*')->get()->take(8)->toArray();
     
        $blogActive = Blog::orderBy('updated_at','desc')->first();
        $blogs = Blog::orderBy('updated_at','desc')->where('id','!=',$blogActive->id)->select('blogs.*')->get()->take(4);

        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $sliders = HomeSlider::orderBy('updated_at','desc')->select('home_sliders.*')->get();

        $appSetting = ApplicationSetting::first();

        return view('front.home.index_ar',compact('products','blogs','blogActive','sliders', 'recentBlogs','appSetting'));
    }

    public function aboutus()
    {
        $about = AboutUs::first();
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);
        
        $appSetting = ApplicationSetting::first();

        return view('front.home.aboutus',compact('about', 'recentBlogs','appSetting'));
    }

    public function aboutusAr()
    {
        $about = AboutUs::first();
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $appSetting = ApplicationSetting::first();

        return view('front.home.aboutus_ar',compact('about', 'recentBlogs','appSetting'));
    }

    public function products(Category $category=null)
    {
        $products = product::select('products.*');
        if($category) {
            $products->where('category_id',$category->id);
        }
        $products = $products->get();

        $categories = Category::select('id','name','name_ar','description','image','parent_id','active')
            ->where('parent_id', null)->orderBy('id', 'desc');

        $categories = $categories->paginate(Category::where('parent_id', null)->count('id'));
      
        $categories->getCollection()->transform(function ($value) {
            
            $value->subCategory = Category::where('parent_id',$value->id)->get();

            return $value;
        });
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);
        $currentSubCategory = $category;
        $currentCategory = null;
        if($category != null)
            $currentCategory = Category::find($category->parent_id);

        $appSetting = ApplicationSetting::first();

        return view('front.home.products',compact('products','appSetting','categories', 'recentBlogs', 'category', 'currentCategory','currentSubCategory'));
    }

    public function productsAr(Category $category=null)
    {
        $products = product::select('products.*');
        if($category) {
            $products->where('category_id',$category->id);
        }
        $products = $products->get();

        $categories = Category::select('id','name','name_ar','description','description_ar','image','parent_id','active')
            ->where('parent_id', null)->orderBy('id', 'desc');

        $categories = $categories->paginate(Category::where('parent_id', null)->count('id'));
      
        $categories->getCollection()->transform(function ($value) {
            
            $value->subCategory = Category::where('parent_id',$value->id)->get();

            return $value;
        });
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);
        $currentSubCategory = $category;
        $currentCategory = null;
        if($category != null)
            $currentCategory = Category::find($category->parent_id);

        $appSetting = ApplicationSetting::first();

        return view('front.home.products_ar',compact('products','categories', 'recentBlogs','currentCategory','currentSubCategory','appSetting'));
    }

    public function productDetail(Product $product)
    {
        $relatedProducts = Product::where('id','!=',$product->id)->get();

        $appSetting = ApplicationSetting::first();

        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        return view('front.home.product_detail',compact('product', 'relatedProducts','appSetting', 'recentBlogs'));
    }

    public function productDetailAr(Product $product)
    {
        $relatedProducts = Product::where('id','!=',$product->id)->get();

        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $appSetting = ApplicationSetting::first();

        return view('front.home.product_detail_ar',compact('product', 'relatedProducts', 'recentBlogs','appSetting'));
    }

    public function blogs()
    {
        $blogs = blog::get();
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $appSetting = ApplicationSetting::first();

        return view('front.home.blogs',compact('blogs', 'recentBlogs','appSetting'));
    }

    public function blogsAr()
    {
        $blogs = blog::get();
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $appSetting = ApplicationSetting::first();

        return view('front.home.blogs_ar',compact('blogs', 'recentBlogs','appSetting'));
    }

    public function blogDetail(Blog $blog)
    {   
        $relatedBlogs = blog::where('id','!=',$blog->id)->get();
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $appSetting = ApplicationSetting::first();

        return view('front.home.blog_detail',compact('blog','relatedBlogs', 'recentBlogs','appSetting'));
    }

    public function blogDetailAr(Blog $blog)
    {
        $relatedBlogs = blog::where('id','!=',$blog->id)->get();
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $appSetting = ApplicationSetting::first();

        return view('front.home.blog_detail_ar',compact('blog','relatedBlogs', 'recentBlogs','appSetting'));
    }

    public function covid()
    {
        $products = product::where('type',product::COVID)->get();
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $appSetting = ApplicationSetting::first();

        return view('front.home.covid',compact('products', 'recentBlogs','appSetting'));
    }

    public function covidAr()
    {
        $products = product::where('type',product::COVID)->get();
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $appSetting = ApplicationSetting::first();

        return view('front.home.covid_ar',compact('products', 'recentBlogs','appSetting'));
    }

    public function careers()
    {
        $jobs = job::get();
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $appSetting = ApplicationSetting::first();

        return view('front.home.careers',compact('jobs', 'recentBlogs','appSetting'));
    }

    public function careersAr()
    {
        $jobs = job::get();
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $appSetting = ApplicationSetting::first();

        return view('front.home.careers_ar',compact('jobs', 'recentBlogs','appSetting'));
    }

    public function careersApply($id)
    {
        $job = job::find($id);
        $jobRequirements = JobRequirements::where('job_id',$id)->get();
        $whatWeExpects = JobWhatWeExpect::where('job_id',$id)->get();
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $appSetting = ApplicationSetting::first();

        return view('front.home.careersApply',compact('job','jobRequirements','whatWeExpects', 'recentBlogs','appSetting'));
    }

    public function careersApplyAr($id)
    {
        $job = job::find($id);
        $jobRequirements = JobRequirements::where('job_id',$id)->get();
        $whatWeExpects = JobWhatWeExpect::where('job_id',$id)->get();
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $appSetting = ApplicationSetting::first();

        return view('front.home.careersApply_ar',compact('job','jobRequirements','whatWeExpects', 'recentBlogs','appSetting'));
    }

    public function careersApplyToJob(Request $request)
    {
        
        $jobApplicant = new JobApplicant();
        $jobApplicant->first_name = $request->first_name;
        $jobApplicant->last_name = $request->last_name;
        $jobApplicant->email = $request->email;
        $jobApplicant->age = $request->template_jobform_age;
        $jobApplicant->city = $request->template_jobform_city;
        $jobApplicant->expected_salary = $request->template_jobform_salary;
        $jobApplicant->start_date = $request->template_jobform_start;
        $jobApplicant->experience = $request->experiencee;
        $jobApplicant->application = $request->application;
        $jobApplicant->job_id = $request->job_id;
        if($request->has('cv')){
            $file = $request->file('cv');
            $jobApplicant->cv = '/uploads/cv/'. $file->getClientOriginalName();
            $destinationPath = '/uploads/cv';
            $file->move(public_path($destinationPath), $file->getClientOriginalName());
        }

        $jobApplicant->save();
      
        return redirect(route('front_careers'));
    }

    public function contactus()
    {
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $appSetting = ApplicationSetting::first();

        return view('front.home.contactus', compact('recentBlogs','appSetting'));
    }

    public function contactusAr()
    {
        $recentBlogs = Blog::orderBy('updated_at','desc')->select('blogs.*')->get()->take(3);

        $appSetting = ApplicationSetting::first();

        return view('front.home.contactus_ar', compact('recentBlogs','appSetting'));
    }

    public function saveContactus(Request $request)
    {
       
        $contact = new contact();
        $contact->full_name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->service = $request->service;
        $contact->message = $request->message;

        $contact->save();
        
        return redirect(route('front_contactus'));
    }
   
}
