<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\product;
use App\category;
use Illuminate\Pagination\Paginator;
use App\AboutUs;

class AboutUsController extends Controller
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

            $query = AboutUs::orderBy($orderBy, $orderDir);


            if ($textSearch) {
              $textSearch = mb_ereg_replace(" ", "%", $textSearch);
              $query->Where(\DB::raw("COALESCE(about_us.title,'')") , "like", "%$textSearch%");
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

        $AboutUs = AboutUs::first();
        if($AboutUs == null)
            $AboutUs = new AboutUs();
        return view('backend.about_us.index', compact('AboutUs'));
    }

    public function save(Request $request)
    {
        if($request->id == 0)
        {
            $AboutUs = AboutUs::first();
            if($AboutUs == null)
                $AboutUs = new AboutUs();

            $AboutUs->title = $request->title;
            $AboutUs->title_ar = $request->title_ar;
            $AboutUs->sub_title = $request->sub_title;
            $AboutUs->sub_title_ar = $request->sub_title_ar;
            $AboutUs->why_cheose_us = $request->why_cheose_us;
            $AboutUs->why_cheose_us_ar = $request->why_cheose_us_ar;
            $AboutUs->our_mission = $request->our_mission;
            $AboutUs->our_mission_ar = $request->our_mission_ar;
            $AboutUs->our_vision = $request->our_vision;
            $AboutUs->our_vision_ar = $request->our_vision_ar;
            $AboutUs->our_values = $request->our_values;
            $AboutUs->our_values_ar = $request->our_values_ar;
            $AboutUs->our_strategy = $request->our_strategy;
            $AboutUs->our_strategy_ar = $request->our_strategy_ar;
            
            if($request->has('main_image')){
                $file = $request->file('main_image');
                $AboutUs->main_image = '/uploads/about/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/about';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            if($request->has('our_strategy_image')){
                $file = $request->file('our_strategy_image');
                $AboutUs->our_strategy_image = '/uploads/about/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/about';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            if($request->has('our_values_image')){
                $file = $request->file('our_values_image');
                $AboutUs->our_values_image = '/uploads/about/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/about';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            
            $AboutUs->save();
        }
        else
        {
            $AboutUs = AboutUs::find($request->id);
            
            $AboutUs->title = $request->title;
            $AboutUs->title_ar = $request->title_ar;
            $AboutUs->sub_title = $request->sub_title;
            $AboutUs->sub_title_ar = $request->sub_title_ar;
            $AboutUs->why_cheose_us = $request->why_cheose_us;
            $AboutUs->why_cheose_us_ar = $request->why_cheose_us_ar;
            $AboutUs->our_mission = $request->our_mission;
            $AboutUs->our_mission_ar = $request->our_mission_ar;
            $AboutUs->our_vision = $request->our_vision;
            $AboutUs->our_vision_ar = $request->our_vision_ar;
            $AboutUs->our_values = $request->our_values;
            $AboutUs->our_values_ar = $request->our_values_ar;
            $AboutUs->our_strategy = $request->our_strategy;
            $AboutUs->our_strategy_ar = $request->our_strategy_ar;

            if($request->has('image')){
                $file = $request->file('image');
                $AboutUs->image = '/uploads/about/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/about';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            if($request->has('image')){
                $file = $request->file('image');
                $AboutUs->main_image = '/uploads/about/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/about';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            if($request->has('our_strategy_image')){
                $file = $request->file('our_strategy_image');
                $AboutUs->our_strategy_image = '/uploads/about/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/about';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            if($request->has('our_values_image')){
                $file = $request->file('our_values_image');
                $AboutUs->our_values_image = '/uploads/about/'. $file->getClientOriginalName();
                $destinationPath = '/uploads/about';
                $file->move(public_path($destinationPath), $file->getClientOriginalName());
            }
            $AboutUs->save();
        }
        return response()->json($request);
    }

    public function delete($id)
    {
        $AboutUs = AboutUs::find($id);
        $AboutUs->delete();
        return response()->json($id);
    }
}
