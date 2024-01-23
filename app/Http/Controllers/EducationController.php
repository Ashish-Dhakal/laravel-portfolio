<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function education(){
        return view('/education');
    }

    public function education_add(Request $request)
    {

        //  dd($request->all());
        //return view('service_add');

        $request->validate([
            'board' => 'required',
            'year' => 'required',
            'description' => 'required'
        ]);


        $service = new Education;
        $service->board = $request->board;
        $service->year = $request->year;
        $service->Description = $request->description;

        $service->save();
        return  back();
    }
}
