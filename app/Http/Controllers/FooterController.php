<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FooterController extends Controller
{

    public function index()
    {
        $footer = Footer::latest()->paginate(10);
        return view('admin.footer.index', compact('footer'));
    }

    public function footerTrashed()
    {
        $footer = Footer::onlyTrashed()->get();
        return view('admin.footer.trashed', compact('footer'));
    }

    public function create()
    {
        return view('admin.footer.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           
            'footer_description'=>'nullable',
            'location'=>'nullable',
            'phone_num'=>'nullable',
            'contact_email'=>'nullable',

        ]);

        /*$logo = $request->logo;
        $logoImage = time().$logo->getClientOriginalName();
        $logo->move('images',$logoImage);*/


        $footer = Footer::create([
            'id' => Auth::id(),
           // 'logo' => 'images/'.$logoImage,
            'footer_description' => $request->footer_description,
            'location' => $request->location,
            'phone_num' => $request->phone_num,
            'contact_email' => $request->contact_email,


        ]);
        return redirect()->back()->with('success');

    }


    public function show()
    {
//        $footer_all = Footer::all();
//        $footer = Footer::select('logo','footer_description','location','phone_num','contact_email')->first();
//        return view('layouts.footer', compact('footer','footer_all'));

    }


    public function edit($id)
    {
        $footer = Footer::find($id);
        return view('admin.footer.edit', compact('footer'));
    }


    public function update(Request $request, $id)
    {
        $footer = Footer::find($id);

        $this->validate($request,[
           
            'footer_description'=>'nullable',
            'location'=>'nullable',
            'phone_num'=>'nullable',
            'contact_email'=>'nullable',

        ]);

       /* if ($request->has('logo')){
            $logo = $request->logo;
            $logoImage = time().$logo->getClientOriginalName();
            $logo->move('images',$logoImage);
            $footer->logo='images/'.$logoImage;
        }*/

        $footer->footer_description = $request->footer_description;
        $footer->location = $request->location;
        $footer->phone_num = $request->phone_num;
        $footer->contact_email = $request->contact_email;
        $footer->save();

        return redirect()->route('footer')->with('success','header updated successfully');


    }

    public function destroy($id)
    {
        $footer = Footer::withTrashed()->where('id',$id)->first();
        $footer->forceDelete();
        return redirect()->back();
    }


    public function softDestroy($id)
    {
        $footer = Footer::find($id);
        $footer->delete();
        return redirect()->back();
    }


    public function restore($id)
    {
        $footer = Footer::withTrashed()->where('id',$id)->first();
        $footer->restore();
        return redirect()->back();
    }
}
