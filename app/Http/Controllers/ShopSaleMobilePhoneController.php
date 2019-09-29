<?php

namespace App\Http\Controllers;

use App\ShopPost;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Sentinel;
use Illuminate\Http\Request;
use App\Image;

class ShopSaleMobilePhoneController extends Controller
{
    public function index(){
        $model = new ModelController();
        return view('shop.shop_wise_sale',['phone_models' => $model->LoadModel()]);
    }

    public function ShopWiseSaleMobile(Request $request){

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

        $post = new ShopPost();
        $post->shop_name = $request->input('shop_name');
        $post->discription = $request->input('description');
        $post->price = $request->input('price');
        $post->model_id = $request->input('model');
        $post->brand_id = $request->input('brand');
        $post->location = $request->input('location');
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
                $files->post_id = $post->getKey();
                $files->image_name = $filename;
                $files->path = $filesize;
                $files->save();
            }

        }
        return redirect()->back();
    }

    public function getAllShopAds(){

    }
}
