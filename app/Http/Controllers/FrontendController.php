<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\CategoryModel;
use App\Model\ProductModel;
use App\Model\ProductReviewModel;
use Illuminate\Support\Facades\DB;


class FrontendController extends Controller
{
    public function index()
    {
    	$data['category'] = CategoryModel::all();
    	$data['product'] = ProductModel::all();    
        return view('welcome', $data);
    }

    public function product_list($id)
    {    	
    	$data['category'] = CategoryModel::all();    	
    	$data['product'] = ProductModel::where('id_category', $id)->get();
        return view('welcome', $data);		
    }

    public function cart($id)
    {
        $data['category'] = CategoryModel::all();
        $data['product'] = ProductModel::find($id);
        $data['product_list'] = ProductModel::where('id_category', $id)->get();
        // return $data['review'] = ProductReviewModel::where('product_id', $id)->get();
        $data['review'] = DB::select("SELECT * FROM `product_review` JOIN users ON product_review.user_id = users.id WHERE product_id = $id");
        $data['total_rating'] = DB::select("SELECT SUM(rating) AS total_rating FROM product_review WHERE product_id = $id");
        return view('fe.cart', $data);
    }

    public function search(Request $request)
    {
        $data['category'] = CategoryModel::all();   
        $data['search'] = $request->product_name;
        $data['product'] = DB::select("SELECT *  FROM `product` WHERE `name` LIKE '%$request->product_name%'");
        return view('welcome', $data);
    }
}
