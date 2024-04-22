<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Footer;
use App\Models\Header;
use App\Models\About;
use App\Models\AboutOurTeam;
use App\Models\AboutFuture;
use App\Models\Partner;
use App\Models\Product;
class PostsController extends Controller
{
    
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $partners = Partner::query()
            ->where('partner_name', 'LIKE', "%{$search}%")->with('products')
            ->get();
    
        $products = Product::query()
        ->where('product_name', 'LIKE', "%{$search}%")
        ->get();
        // Return the search view with the resluts compacted
        return view('site.result_search', compact('partners','products'));
    }

}
