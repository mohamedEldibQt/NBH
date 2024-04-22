<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\BranchTeam;
use App\Models\BranchImage;
use App\Models\BranchFuture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BranchController extends Controller
{

    public function index()
    {
        $branch = Branch::latest()->paginate(10);
        $branchs = Branch::with('images')->first();
      
              
        if(!$branch){
            abort(404);
        }
        return view('admin.branch.index', compact('branch','branchs'));
    }

    public function branchTrashed()
    {
        $branch = Branch::onlyTrashed()->get();
        return view('admin.branch.trashed', compact('branch'));

    }

    public function create()
    {

        return view('admin.branch.create');
    }


    public function store(Request $request)
    {

        $this->validate($request,[
            'branch_name'=>'nullable',
            'branch_description'=>'nullable',
         
        ]);


        $branch_img = $request->file('branch_img');

        $branch = Branch::create([
            'branch_name' => $request->branch_name,
            'branch_description' => $request->branch_description,
            'slug' => str_slug($request->branch_name),

        ]);
        $allowedfileExtension=['pdf','jpg','png','mp4'];
        foreach($branch_img as $file) {

            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            if($check) {
                $newAboutImage = time().$file->getClientOriginalName();
                $file->move('images',$newAboutImage);
                   BranchImage::create([
                        'branch_id'=>$branch->id,
                        'img' => $newAboutImage
                    ]);

            }
        }

        return redirect()->back();
    }


    public function show($slug)
    {
        $branch_all = Branch::all();
        $branch = Branch::with('images')->where('slug',$slug)->first();

        $branchTeamAll = BranchTeam::where('branch_id',$branch->id)->get();
        $branchFutureAll = BranchFuture::where('branch_id',$branch->id)->get();

        return view('site.branch', compact('branch','branch_all','branchTeamAll','branchFutureAll'));
    }


    public function edit($id)
    {
        $branch = Branch::find($id);
        return view('admin.branch.edit', compact('branch'));

    }


    public function update(Request $request,$id)
    {
        $branch = Branch::find($id);
        $this->validate($request,[
            'branch_name'=>'nullable',
            'branch_description'=>'nullable',
           

        ]);
        $branch_img = $request->file('branch_img');
        if ($request->has('branch_img')){
            $allowedfileExtension=['pdf','jpg','png','mp4'];
            foreach($branch_img as $file) {

                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check) {
                    $newAboutImage = time().$file->getClientOriginalName();
                    $file->move('images',$newAboutImage);
                    BranchImage::create([
                        'branch_id'=>$branch->id,
                        'img' => $newAboutImage
                    ]);

                }
            }
        }



        $branch->branch_name = $request->branch_name;
        $branch->branch_description = $request->branch_description;
        $branch->save();
        return redirect()->route('branch')->with('success','header updated successfully');



    }


    public function destroy($id)
    {
        $branch = Branch::withTrashed()->where('id',$id)->first();
        $branch->forceDelete();

        return redirect()->back();

    }


    public function softDestroy($id)
    {
        $branch = Branch::find($id);
        $branch->delete();

        return redirect()->back();

    }


    public function restore($id)
    {
        $branch = Branch::withTrashed()->where('id',$id)->first();
        $branch->restore();

        return redirect()->back();

    }

}
