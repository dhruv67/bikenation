<?php

namespace App\Modules\Front\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Colour\Models\Colour;
use App\Modules\Category\Models\Category;
use App\Modules\Images\Models\Images;
use App\Modules\Product\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */

    public function fetchproducts()
    {
        $product = Product::where('status','y')->get();
        $category = Category::where('status','y')->groupBy('category')->get();
        $color = Colour::where('status','y')->get();
        return view("Front::products",compact('product','category','color'));
    }

    public function productsdetails(Request $request, $url)
    {
        
        $product = Product::where('url',$url)->where('status','y')->get();
        $pid = $product->pluck('id');
        $image = Images::where('product_id', $pid)->get();
        
        return view("Front::details",compact('product','image'));
    }

    public function filter(Request $request)
    {
        
        if (isset($request->category) && isset($request->color))
        {
            $product = Product::whereIn('category_id',$request->category)->whereIn('color_id',$request->color)->where('status','y')->whereBetween('price', [(int)$request->minimum, (int)$request->maximum])->orderBy($request->sortby,$request->orderby)->get();
        }

        elseif (isset($request->category))
        {
            $product = Product::whereIn('category_id',$request->category)->where('status','y')->whereBetween('price', [(int)$request->minimum, (int)$request->maximum])->orderBy($request->sortby,$request->orderby)->get();
        } 

        elseif (isset($request->color))
        {
            $product = Product::whereIn('color_id',$request->color)->where('status','y')->whereBetween('price', [(int)$request->minimum, (int)$request->maximum])->orderBy($request->sortby,$request->orderby)->get();
        }

        else
        {
            $product = Product::where('status','y')->whereBetween('price', [(int)$request->minimum, (int)$request->maximum])->orderBy($request->sortby,$request->orderby)->get();
        }
        // dd($product);
        // if(!$product->isEmpty())
        if(!$product->isEmpty())
        {
            if ($request->view =='true'){
                return view('Front::grid',compact('product'));
            }
            else{
                return view('Front::list',compact('product'));
            }
        }
        else{
            $category = Category::where('status','y')->get();
            $color = Colour::where('status','y')->get();
            $product = Product::where('status','y')->get();
            return view('Front::noproduct',compact('category','color','product'));
        }
    }
}
