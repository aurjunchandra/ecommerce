<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Str;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use File;

class ProductController extends Controller
{
    public function addProduct()
    {
        $categories= Category::orderBy('created_at','desc')->get();
        $brands= Brand::orderBy('created_at','desc')->get();

        return view('admin.product.add', compact('categories', 'brands'));
    }

    public function manageProduct()
    {

        $products= Product::orderBy('created_at','desc')->get();
        return view('admin.product.manage', compact('products'));
    }

    public function editProduct($id)
    {
        $product= Product::with('category','brand')->where('id', $id)->first();
        $categories= Category::orderBy('created_at','desc')->get();
        $brands= Brand::orderBy('created_at','desc')->get();

        return view('admin.product.edit', compact('categories', 'brands','product'));

    }

    public function storeProduct( Request $request)
    {
       // dd($request->gallery_image);
        //dd(json_encode($request->gallery_image));
        //dd($request->hasFile('gallery_image'));
       //dd($galleryImageName);
        //Main Image
        $imageName=time().'.'.$request->image->extension();
        $request->image->move('product/', $imageName);

        //Gallery Images
    
        if($request->hasFile('gallery_image')){

            $galleryImageFile = $request->file('gallery_image');

            foreach ($galleryImageFile as $file)
            {
                $galleryImageName = uniqid().'_'.time().'.'.$file->getClientOriginalExtension();
                $path = public_path() .'/product/';
                $file -> move($path, $galleryImageName); 
                $galleryImgData[] = $galleryImageName;
            }

        }

        $product = Product::create([
            'name' =>$request->name,
            'slug'=> Str::slug($request->name),
            'category_id' =>$request->category_id,
            'brand_id' => $request->brand_id,
            'price' => $request->price,
            'qty' => $request->qty,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => $imageName,
            'gallery_image' =>json_encode($galleryImgData),
            'type' => $request->type,            
        ]);
       
            return redirect()->back()->with('success','Product has been created' );
    }



    public function updateProduct(ProductUpdateRequest $request , $id)
    {
        $product = Product::find($id);

        if($request -> hasFile('image'))
        {
            if(file_Exists($product->image && public_path ('product/' .$product->image) ))
            {
                unlink(public_path ('product/' .$product->image));
            }
            
            $name = time(). '.'. $request-> image -> getClientOriginalExtension();
            $request->image->move('product/', $name);
            $product->image=$name;
        } 

        if($request->hasFile('gallery_image')){

            $galleryImageFileUpdate = $request->file('gallery_image');

            foreach ($galleryImageFileUpdate as $file)
            {
                $galleryImageNameUpdate = uniqid().'_'.time().'.'.$file->getClientOriginalExtension();
                $path = public_path() .'/product/';
                $file -> move($path, $galleryImageNameUpdate); 
                $galleryImgDataUpdate[] = $galleryImageNameUpdate;
                $product->gallery_image = json_encode($galleryImgDataUpdate);
            }

        }

        $productUpdate = $product->update([
            'name' =>$request->name,
            'slug'=> Str::slug($request->name),
            'category_id' =>$request->category_id,
            'brand_id' => $request->brand_id,
            'price' => $request->price,
            'qty' => $request->qty,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            
            'type' => $request->type,            
        ]);

        return redirect()->back()->with('success','Product has been updated' );

    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);

        foreach(json_decode($product->gallery_image) as $file){
            File:: delete(public_path('product/'.$file));
        }

        File:: delete(public_path('product/'.$product->image));
        $product->delete();

        return redirect()->back()->with('success','Product has been deleted' );
    }
}
