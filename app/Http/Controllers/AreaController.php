<?php

namespace App\Http\Controllers;

use App\Area;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreaController extends Controller
{
    public function getAreas(Request $request){
       if ($request->ajax()){
           $areas = District::find($request->dis_id)->areas;
           foreach ($areas as $area) {
               $row[] = array($area->ar_name,$area->ar_id);
           }
           return json_encode($row);
       }
    }
}
