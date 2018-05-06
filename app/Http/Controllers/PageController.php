<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Catagory;
use App\Manufacture;
use App\Order;
use App\OrderDetail;
use App\User;
use App\Comment;
use App\Contact;
use App\Slide;
use App\ProductDetail;


class PageController extends Controller
{
	public function getHome(){
		$slide = Slide::all();
	//	$new_product=Product::all();
		$new_product=Product::orderBy('id','desc')->paginate(5);
		$most_views_product = Product::orderBy('view','desc')->paginate(5);
		return view('pages.home',compact('slide','new_product','most_views_product'));
	}

	public function getProduct($id){
		$product = Product::find($id);
        $product -> view +=1;
        $product->update();
        $comments = Comment::all();
        $rel_product = Product::where('catalog_id',$product->catalog_id)->paginate(4);
		return view('pages.product_detail',compact('product','rel_product','comments'));
	}
	public function getShop(){
		return view('pages.shop');
	}
	public function getAbout(){
		return view('pages.about');
	}
	public function getContact(){
		return view('pages.contact');
	}
	public function getCart(){
		return view('pages.cart');
	}
    public function getCheckout(){
		return view('pages.checkout');
	}
}
