<?php

namespace App\Http\Controllers;

use App\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class HomeSliderController extends Controller
{
    public function index(Request $request){
        if($request->ajax())
        {
            $draw = $request->draw;
            $start = $request->start;
            $length = $request->length;
            $columns = $request->columns;
            $order = $request->order[0]['column'];
            $orderBy = $columns[$order]["name"];
            $orderDir = $request->order[0]['dir'];
            $textSearch = $request->search['value'];

            Paginator::currentPageResolver(function () use ($start, $length) {
                return ($start / $length + 1);
            });

            $query = HomeSlider::orderBy($orderBy, $orderDir);

            if ($textSearch) {
              $textSearch = mb_ereg_replace(" ", "%", $textSearch);
              $query->Where(\DB::raw("COALESCE(home_sliders.title,'')") , "like", "%$textSearch%");
            }

            $rows = $query->paginate($length);

            $result = [
                'draw' => $draw,
                'recordsTotal' => $rows->total(),
                'recordsFiltered' => $rows->total(),
                'data' => $rows
            ];

            return $result;
        }

        return view('backend.home.index');
    }

    public function save(Request $request)
    {
        if($request->id == 0)
        {
            $HomeSlider = new HomeSlider();

            $HomeSlider->title = $request->title;
            $HomeSlider->title_ar = $request->title_ar;
            $HomeSlider->sub_title = $request->sub_title;
            $HomeSlider->sub_title_ar = $request->sub_title_ar;
            $HomeSlider->top_title = $request->top_title;
            $HomeSlider->top_title_ar = $request->top_title_ar;
            
            if($request->has('image')){
                $file = $request->file('image');
                $HomeSlider->image = '/uploads/home/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/home';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            
            $HomeSlider->save();
        }
        else
        {
            $HomeSlider = HomeSlider::find($request->id);

            $HomeSlider->title = $request->title;
            $HomeSlider->title_ar = $request->title_ar;
            $HomeSlider->sub_title = $request->sub_title;
            $HomeSlider->sub_title_ar = $request->sub_title_ar;
            $HomeSlider->top_title = $request->top_title;
            $HomeSlider->top_title_ar = $request->top_title_ar;
            
            if($request->has('image')){
                $file = $request->file('image');
                $HomeSlider->image = '/uploads/home/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/home';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }

            $HomeSlider->save();
        }
        return response()->json($request);
    }

    public function delete($id)
    {
        $HomeSlider = HomeSlider::find($id);
        $HomeSlider->delete();
        return response()->json($id);
    }
}
