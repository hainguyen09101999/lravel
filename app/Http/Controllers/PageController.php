<?php

namespace App\Http\Controllers;

use App\Models\Danhmuc;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {  
        $menu = Danhmuc::select()->get();

        $productss = Product::orderBy('created_at', 'desc')->take(8)->get();
        
        return view('Pages.Page.home', ['title' => 'Trang Home'], compact('productss', 'menu'));
    }

    public function blog()
    {
        return view('Pages.Page.blog', ['title' => 'Trang Blog']);
    }

    public function contact()
    {
        return view('Pages.Page.contact', ['title' => 'Trang Contact']);
    }
    
    public function shop(){
        $danhmuc = Danhmuc::all();
        $product =  Product::orderBy('created_at', 'desc')->paginate(6);  
        $productnews = $product->sortByDesc('id')->take(4);
        return view('Pages.product.shop', ['title' => 'Trang Shop'], compact('product', 'productnews','danhmuc'));
    }

    public function product($id){
        $danhmuc = Danhmuc::all();
        $danhmucItem = Danhmuc::find($id);
        $product = Product::where('danhmuc_id', $id)->get();
         $productnews = $product->sortByDesc('id')->take(50);

        return view('Pages.product.listproduct', compact('product','productnews','danhmuc', 'danhmucItem'));
    }
    public function chitiet($slug){
   
        $product = Product::where('slug', $slug)->first();   
        $relatedProducts = Product::where('danhmuc_id', $product->danhmuc_id)
        ->where('id','!=', $product->id)->get();
        return view('Pages.product.chitiet',['title' => 'Trang Chi tiết sản phẩm'],compact('product','relatedProducts'));
    }


    public function search(Request $request)
    {
        $danhmuc = Danhmuc::all();

        $products = Product::where('name', 'like', '%'.$request->key.'%')->get();


        $productnews = $products->sortByDesc('id')->take(50);

        return view('Pages.product.search', compact('products', 'danhmuc', 'productnews'));
    }

}
