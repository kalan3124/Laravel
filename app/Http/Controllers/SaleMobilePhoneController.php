<?php

namespace App\Http\Controllers;

use App\District;
use App\Image;
use App\Post;
use Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleMobilePhoneController extends Controller
{
    public function index($id){
        $district = DB::table('tbl_districts AS d')
            ->select('d.dis_name','d.dis_id','a.ar_id','a.ar_name')
            ->join('tbl_areas AS a','a.dis_id','d.dis_id')
            ->where('a.ar_id',$id)
            ->first();

        $districts = $district->dis_name;
        $districts_id = $district->dis_id;
        $area = [$district->ar_name][0];
        $area_id = [$district->ar_id][0];

        $model = new ModelController();

        return view('mobile.sale_mobile',[
            'districts' => $districts,
            'districts_id' => $districts_id,
            'area' => $area,
            'area_id' => $area_id,
            'phone_models' => $model->LoadModel()
        ]);
    }

    public function SaleMobile(Request $request){

        $request->validate([
            'shop_name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'model' => 'required',
            'brand' => 'required',
            'location' => 'required',
            'edition' => 'required',
            'phone' => 'required|numeric'
        ],[
            'shop_name.required' => 'Shop name is required',
            'description.required' => 'Description is required',
            'price.required' => 'Price is required',
            'price.numeric' => 'Price is Invalid format',
            'model.required' => 'Model is required',
            'brand.required' => 'Brand is required',
            'edition.required' => 'Edition is required',
            'phone.required' => 'Phone is required',
            'phone.numeric' => 'Phone number is Invalid'

        ]);

        $id = Sentinel::getUser()->id;
        if (!isset($id))
            return redirect()->back();

        $post = new Post();
        $post->discription = $request->input('description');
        $post->price = $request->input('price');
        $post->model_id = $request->input('model');
        $post->brand_id = $request->input('brand');
        $post->dis_id = $request->input('dis_id');
        $post->area_id = $request->input('ar_id');
        $post->edition = $request->input('edition');
        $post->phone = $request->input('phone');
        $post->u_id = $id;
        $post->save();

        if ($request->hasFile('file')){

            foreach ($request->file as $file){
                $filename = $file->getClientOriginalName();
                $filesize = $file->getClientSize();
                $file->storeAs('public/upload',$filename);

                $files =  new Image();
                $files->user_post_id = $post->getKey();
                $files->image_name = $filename;
                $files->path = $filesize;
                $files->save();

            }

        }
        return redirect()->back();
    }
}
