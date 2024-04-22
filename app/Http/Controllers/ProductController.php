<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{

    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.product.index', compact('products'));
    }

    public function productTrashed()
    {
        $products = Product::onlyTrashed()->get();
        return view('admin.product.trashed', compact('products'));
    }


    public function create()
    {
        $products = Product::all();
        $partner = Partner::all();
        return view('admin.product.create',compact('products','partner'));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'product_name'=>'nullable',
            'product_img'=>'nullable',
            'partner_id'=>'required|exists:partners,id'
        ]);
        $product_img = $request->product_img;
        $newProductImage = time().$product_img->getClientOriginalName();
        $product_img->move('images',$newProductImage);


        $products = Product::create([
            'id' => Auth::id(),
            'partner_id' =>  $request->partner_id,
            'product_name' => $request->product_name,
            'product_img' => 'images/'.$newProductImage,

        ]);
        return redirect()->back();
    }


    public function show()
    {
        //$product_all = Product::where('partner_id',$id);
//        $product = Product::select('partner_id','product_name','product_img')->first();

       // return view('site.product');
    }


    public function edit($id)
    {
        $products = Product::find($id);
        $partner = Partner::all();
        return view('admin.product.edit', compact('products','partner'));
    }


    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $this->validate($request,[
            'product_name'=>'nullable',
            'product_img'=>'nullable',
        ]);

        if ($request->has('product_img')){
            $product_img = $request->product_img;
            $newProductImage = time().$product_img->getClientOriginalName();
            $product_img->move('images',$newProductImage);
            $products->product_img='images/'.$newProductImage;
        }

        $products->product_name = $request->product_name;
        $products->save();
        return redirect()->route('products')->with('success','header updated successfully');
    }


    public function destroy($id)
    {
        $products = Product::withTrashed()->where('id',$id)->first();
        $products->forceDelete();
        return redirect()->back();
    }


    public function softDestroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->back();
    }


    public function restore($id)
    {
        $products = Product::withTrashed()->where('id',$id)->first();
        $products->restore();
        return redirect()->back();
    }

}
