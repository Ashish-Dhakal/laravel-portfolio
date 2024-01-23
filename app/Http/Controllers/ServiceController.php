<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function service(){
        return view('/service');
    }

    public function service_add( Request $request){

      //  dd($request->all());
        //return view('service_add');

        $request -> validate([
            'title' => 'required',
            'description' => 'required'
        ]);


        $service = new Service;
        $service->title = $request->title;
        $service->Description = $request->description;

        $service->save();
        return  back();
    }
}