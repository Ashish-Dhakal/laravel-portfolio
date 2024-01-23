<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function about(){
        return view('/about');
    }
    public function about_add(Request $request)
    {

        //  dd($request->all());
        //return view('service_add');

        $request->validate([
            'aboutme' => 'required',
            'Exp_Years' => 'required',
            'Proj_Complete' => 'required'
        ]);


        $service = new About();
        $service->aboutme = $request->aboutme;
        $service->Exp_Years = $request->Exp_Years;
        $service->Proj_Complete = $request->Proj_Complete;

        $service->save();
        return  back();
    }

}
