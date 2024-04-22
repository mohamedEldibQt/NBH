<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Footer;
use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\About;
use App\Models\AboutOurTeam;
use App\Models\AboutFuture;
use App\Models\Partner;
use Illuminate\Support\Facades\Auth;

class HeaderController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth')->except();
//    }


    public function index()
    {
        $headers = Header::latest()->paginate(10);
        return view('admin.header.index', compact('headers'));
    }


    public function create()
    {
        return view('admin.header.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'nullable',
            'sub_title'=>'nullable',
            'image'=>'nullable'
        ]);

        $image = $request->image;
        $newImage = time().$image->getClientOriginalName();
        $image->move('images',$newImage);

        $headers = Header::create([
            'id' => Auth::id(),
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'image' => 'images/'.$newImage,

        ]);
        return redirect()->back();
    }


    public function show()
    {
        $headers = Header::all();

        $about = About::select('description','about_img','mission','vision','our_value')->first();

        $partner_all = Partner::orderBy('code', 'DESC')->get();
        $branchs=Branch::get();


        return view('site.home', compact('headers','about','branchs','partner_all'));
    }


    public function edit($id)
    {
        $headers = Header::find($id);
        return view('admin.header.edit', compact('headers'));

    }


    public function update(Request $request, $id)
    {
        $headers = Header::find($id);
        $request->validate([
            'title'=>'nullable',
            'sub_title'=>'nullable',
            'image'=>'nullable'

        ]);
        if ($request->has('image')){
            $image = $request->image;
            $newImage = time().$image->getClientOriginalName();
            $image->move('images',$newImage);
            $headers->image='images/'.$newImage;

        }

        $headers->title = $request->title;
        $headers->sub_title = $request->sub_title;
        $headers->save();

        return redirect()->route('headers')->with('success','header updated successfully');
    }


    public function destroy($id)
    {
        $headers = Header::withTrashed()->where('id',$id)->first();
        $headers->forceDelete();
        return redirect()->back();

    }
}
