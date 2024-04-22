<?php

namespace App\Http\Controllers;

use App\Models\AboutFuture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AboutFutureController extends Controller
{

    public function index()
    {
        $aboutFuture = AboutFuture::latest()->paginate(10);
        return view('admin.aboutFuture.index', compact('aboutFuture'));
    }


    public function aboutTrashed()
    {
        $aboutFuture = AboutFuture::onlyTrashed()->get();
        return view('admin.aboutFuture.trashed', compact('aboutFuture'));
    }


    public function create()
    {
        return view('admin.aboutFuture.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'future_img'=>'nullable',
            'future_name'=>'nullable',
            'future_description'=>'nullable'
        ]);

        $future_img = $request->future_img;
        $newFutureImage = time().$future_img->getClientOriginalName();
        $future_img->move('images',$newFutureImage);


        $aboutFuture = AboutFuture::create([
            'id' => Auth::id(),
            'future_img' => 'images/'.$newFutureImage,
            'future_name' => $request->future_name,
            'future_description' => $request->future_description,


        ]);
        return redirect()->back();

    }


    public function show()
    {   $aboutFutureAll = AboutFuture::all();
        $aboutFuture = AboutFuture::select('future_name','future_description','future_img')->first();
        return view('site.about', compact('aboutFuture','aboutFutureAll'));
    }

    public function edit($id)
    {
        $aboutFuture = AboutFuture::find($id);
        return view('admin.aboutFuture.edit', compact('aboutFuture'));
    }


    public function update(Request $request, $id)
    {
        $aboutFuture = AboutFuture::find($id);
        $this->validate($request,[

            'future_img'=>'nullable',
            'future_name'=>'nullable',
            'future_description'=>'nullable'
        ]);


        if ($request->has('future_img')){

            $future_img = $request->future_img;
            $newFutureImage = time().$future_img->getClientOriginalName();
            $future_img->move('images',$newFutureImage);
            $aboutFuture->future_img='images/'.$newFutureImage;
        }

        $aboutFuture->future_name = $request->future_name;
        $aboutFuture->future_description = $request->future_description;
        $aboutFuture->save();
        return redirect()->route('aboutFutures')->with('success','header updated successfully');

    }


    public function destroy($id)
    {
        $aboutFuture = AboutFuture::withTrashed()->where('id',$id)->first();
        $aboutFuture->forceDelete();
        return redirect()->back();
    }


    public function softDestroy($id)
    {
        $aboutFuture = AboutFuture::find($id);
        $aboutFuture->delete();
        return redirect()->back();
    }


    public function restore($id)
    {
        $aboutFuture = AboutFuture::withTrashed()->where('id',$id)->first();
        $aboutFuture->restore();
        return redirect()->back();
    }

}
