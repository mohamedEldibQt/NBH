<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\BranchFuture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BranchFutureController extends Controller
{

    public function index()
    {
        $branchFuture = BranchFuture::latest()->paginate(10);
        return view('admin.branchFuture.index', compact('branchFuture'));
    }

    public function branchTrashed()
    {
        $branchFuture = BranchFuture::onlyTrashed()->get();
        return view('admin.branchFuture.trashed', compact('branchFuture'));
    }

    public function create()
    {
        $branchFuture = BranchFuture::all();
        $branch = Branch::all();
        return view('admin.branchFuture.create', compact('branch','branchFuture'));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'branch_future_name'=>'nullable',
            'branch_future_description'=>'nullable',
            'branch_future_img'=>'nullable',
            'branch_id'=>'required|exists:branches,id'
        ]);

        $branch_future_img = $request->branch_future_img;
        $newBranchFutureImage = time().$branch_future_img->getClientOriginalName();
        $branch_future_img->move('images',$newBranchFutureImage);


        $branchFuture = BranchFuture::create([
            'id' => Auth::id(),
            'branch_id' =>  $request->branch_id,
            'branch_future_name' => $request->branch_future_name,
            'branch_future_description' => $request->branch_future_description,
            'branch_future_img' => 'images/'.$newBranchFutureImage,

        ]);
        return redirect()->back();
    }


    public function show(BranchFuture $branchFuture)
    {
        //
    }


    public function edit($id)
    {
        $branchFuture = BranchFuture::find($id);
        return view('admin.branchFuture.edit', compact('branchFuture'));
    }

    public function update(Request $request, $id)
    {
        $branchFuture = BranchFuture::find($id);
        $this->validate($request,[
            'branch_future_name'=>'nullable',
            'branch_future_description'=>'nullable',
            'branch_future_img'=>'nullable',
            'branch_id'=>'required|exists:branches,id'
        ]);

        if ($request->has('branch_future_img')){

            $branch_future_img = $request->branch_future_img;
            $newBranchFutureImage = time().$branch_future_img->getClientOriginalName();
            $branch_future_img->move('images',$newBranchFutureImage);
            $branchFuture->branch_future_img='images/'.$newBranchFutureImage;
        }

        $branchFuture->branch_future_name = $request->branch_future_name;
        $branchFuture->branch_future_description = $request->branch_future_description;
        $branchFuture->save();
        return redirect()->route('branchsFuture')->with('success','header updated successfully');
    }


    public function destroy($id)
    {
        $branchFuture = BranchFuture::withTrashed()->where('id',$id)->first();
        $branchFuture->forceDelete();
        return redirect()->back();
    }


    public function softDestroy($id)
    {
        $branchFuture = BranchFuture::find($id);
        $branchFuture->delete();
        return redirect()->back();
    }


    public function restore($id)
    {
        $branchFuture = BranchFuture::withTrashed()->where('id',$id)->first();
        $branchFuture->restore();
        return redirect()->back();
    }
}
