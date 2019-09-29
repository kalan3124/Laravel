<?php

namespace App\Http\Controllers;

use App\PhoneBrand;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function LoadModel(){
        $models = PhoneBrand::all();
        return $models;
    }
}
