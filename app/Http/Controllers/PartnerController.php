<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PartnerController extends Controller
{

    public function index()
    {
        $partner = Partner::latest()->paginate(10);
        return view('admin.partner.index', compact('partner'));
    }

    public function partnerTrashed()
    {
        $partner = Partner::onlyTrashed()->get();
        return view('admin.partner.trashed', compact('partner'));
    }

    public function create()
    {
        return view('admin.partner.create');
    }


    public function store(Request $request)
    {

        $this->validate($request,[
            'code' => 'nullable',
            'partner_name'=>'nullable',
            'partner_s_description' => 'nullable',
            'partner_description'=>'nullable',
            'partner_img'=>'nullable',

        ]);

        $partner_img = $request->partner_img;
        $newPartnerImage = time().$partner_img->getClientOriginalName();
        $partner_img->move('images',$newPartnerImage);



        $partner = Partner::create([
            'id' => Auth::id(),
            'code' => $request->code,
            'partner_name' => $request->partner_name,
            'partner_s_description' => $request->partner_s_description,
            'partner_description' => $request->partner_description,
            'partner_img' => 'images/'.$newPartnerImage,

        ]);
        return redirect()->back();
    }

    public function indexWeb()
    {

        $partner_all = Partner::orderBy('code', 'DESC')->get();
        $partner = Partner::select('partner_name','partner_description','partner_img')->first();

        return view('site.partners', compact('partner','partner_all'));
    }

    public function show($id)
    {
        $partner = Partner::where('id',$id)->with('products')->first();
        if(!$partner){
            abort(404);
        }
        return view('site.product', compact('partner'));
    }


    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('admin.partner.edit', compact('partner'));
    }


    public function update(Request $request, $id)
    {
        $partner = Partner::find($id);
        $this->validate($request,[
            'code' => 'nullable',
            'partner_name'=>'nullable',
            'partner_s_description' => 'nullable',
            'partner_description'=>'nullable',
            'partner_img'=>'nullable',

        ]);

        if ($request->has('partner_img')){
            $partner_img = $request->partner_img;
            $newPartnerImage = time().$partner_img->getClientOriginalName();
            $partner_img->move('images',$newPartnerImage);
            $partner->partner_img='images/'.$newPartnerImage;
        }
        $partner->code = $request->code;
        $partner->partner_name = $request->partner_name;
        $partner->partner_s_description = $request->partner_s_description;
        $partner->partner_description = $request->partner_description;
        $partner->save();
        return redirect()->route('partner')->with('success','header updated successfully');
    }


    public function destroy($id)
    {
        $partner = Partner::withTrashed()->where('id',$id)->first();
        $partner->forceDelete();
        return redirect()->back();
    }


    public function softDestroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        return redirect()->back();
    }


    public function restore($id)
    {
        $partner = Partner::withTrashed()->where('id',$id)->first();
        $partner->restore();
        return redirect()->back();
    }

}
