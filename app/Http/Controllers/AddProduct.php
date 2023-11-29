<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Danhmuc;
use App\Models\Product;
use App\Models\ImgProduct;
use App\Http\Requests\Product\StoreProductRequest;
class AddProduct extends Controller
{

    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(4);
        
        return view('admin.product.all',['title' => 'Admin'], compact('products'));
    }
    public function create()
    {
        $danhmuc = Danhmuc::all();
        return view('admin.product.add',['title' => 'Admin | ALL Dữ Liệu'] ,compact('danhmuc') );
    }

    public function store(StoreProductRequest $request)
    {
        $fileName = $request->photo->getClientOriginalName();

        $request->photo->storeAs('public/images', $fileName);
        
        $request->merge(['image' => $fileName]);

        $product = Product::create($request->all());
        
        if ($product && $request->hasFile('photos')) {
            foreach ($request->photos as $key => $value) {

                $fileName = $value->getClientOriginalName();


                $value->storeAs('public/images', $fileName);

                ImgProduct::create([
                    'product_id' => $product->id,
                    'image' => $fileName,
                ]);
            }   
        }
        
        return back()->with('messages', 'Đã Thêm Sản Phẩm Thành Công');
        
    }
    
    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        $danhmuc = Danhmuc::all();
        $product = Product::find($id);
        return view('admin.product.edit',['title' => 'Admin | Edit'], compact('danhmuc', 'product'));
    }

    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        if ($request->hasFile('photo')) 
        {
            $mainFileName = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->storeAs('public/images', $mainFileName);
            $path = storage_path('public/images/' . $product->image);
            if (file_exists($path))
            {
                unlink($path);
            }

            $product->update(['image' => $mainFileName]);
        }
        if ($request->hasFile('photos')) {
            foreach ($product->images as $imgProduct) 
            
            {
                $path = storage_path('public/images/' . $imgProduct->image);
                if (file_exists($path)) {
                    unlink($path);
                }
                $imgProduct->delete();
            }
            foreach ($request->file('photos') as $photo) {
                $fileName = $photo->getClientOriginalName();
                $photo->storeAs('public/images', $fileName);
                ImgProduct::create([
                    'product_id' => $product->id,
                    'image' => $fileName,
                ]);
            }
        }
        $product->update([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'price' => $request->input('price'),
            'price_sale' => $request->input('price_sale'),
            'danhmuc_id' => $request->input('danhmuc_id'),
            'shortdescription' => $request->input('shortdescription'),
            'description' => $request->input('description'),
        ]);

        return redirect()->back()->with('message', 'Đã cập nhật sản phẩm thành công');
    }
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->back()->with('message', 'Xáo  Sản Phẩm Thành Công');
       
    }

        
    
}
