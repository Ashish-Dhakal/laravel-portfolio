<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio(){
        return view('/portfolio');
    }
    public function portfolio_add(Request $request)
    {

     //dd($request->all());
    // return view('service_add');

    // $request->validate([
    //     'image' => 'required',
    //     'link' => 'required' 
    // ]);

    // $image_name = time() . '.' . $request->image->extension();
    // $request->image->move(public_path('project_image'), $image_name);

    // $portfolio = new Portfolio;
    // $portfolio->image = $image_name;
    // $portfolio->link = $request->link;

    // $portfolio->save();
    // return  back();

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
                'link' => 'required',
            ]);

            $image_name = time() . '.' . $request->image->extension();
            $request->image->move(public_path('project_image'), $image_name);

            $portfolio = new Portfolio;
            $portfolio->image = $image_name;
            $portfolio->link = $request->link;

            $portfolio->save();
            return  back();
        }


}}


    // public function portfolio_add(Request $request)
    // {
    //     $request->validate([
    //         'image' => 'required',
    //         'link' => 'required'
    //     ]);

    //     $image = $request->file('image');
    //     $image_name = time() . '.' . $image->extension();
    //     $image->move(public_path('project_image'), $image_name);

    //     $portfolio = new PortfolioUpdate;
    //     $portfolio->Image_name = $image_name;
    //     $portfolio->Link = $request->link;
    //     $portfolio->save();

    //     return back();
    // }

    // }
