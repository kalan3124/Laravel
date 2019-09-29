<?php

namespace App\Http\Controllers;

use App\Area;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistrictController extends Controller
{
    public function index(){
        $districts = District::all();
        return view('mobile.selectDistrict',compact('districts'));
    }
}
