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
use Cart;


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

	public function getProductType($id)
    {
    	$slide = Slide::all();
        $product = Product::where('catalog_id',$id)->get();
        return view('pages.product_type',compact('slide','product'));
    }

    public function getCart(){
    	$cart = Cart::content();
		return view('pages.cart',compact('cart'));
	}
	public function addCart($id)
    {
        $product = Product::find($id);
        Cart::add(['id'=>$id, 'name'=>$product->name,'qty'=>1, 'price'=>$product->price,'options'=>['image'=>$product->image_link,'catalog'=>$product->category->name,'manafacture'=>$product->manafacture->name]]);
        $content = Cart::content();
        return redirect()->route('cart');
    }
	public function removeCart($id){
        Cart::remove($id);
        return redirect()->route('cart');
    }
    public function destroyCart(){
        Cart::destroy();
        return redirect()->back();
    }
    public function minusQtyCart($id){
        $car = Cart::get($id);
        $car->qty -= 1;
        Cart::update($id,$car->qty);
        return redirect()->back();
    }
    public function addQtyCart($id){
        $car = Cart::get($id);
        $car->qty += 1;
        Cart::update($id,$car->qty);
        return redirect()->back();
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
	
    public function getCheckout(){
		return view('pages.checkout');
	}

    public function search(Request $request)
    {
        $product = Product::where('name','like','%'.$request->key.'%')->get();
        return view('pages.search',compact('product'));
    }
}
