<?php

namespace App\Http\Controllers;

use App\Models\BranchTeam;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BranchTeamController extends Controller
{

    public function index()
    {
        $branchTeam = BranchTeam::latest()->paginate(10);
        return view('admin.branchTeam.index', compact('branchTeam'));
    }

    public function branchTrashed()
    {
        $branchTeam = BranchTeam::onlyTrashed()->get();
        return view('admin.branchTeam.trashed', compact('branchTeam'));
    }

    public function create()
    {
        $branchTeam = BranchTeam::all();
        $branch = Branch::all();
        return view('admin.branchTeam.create',compact('branch','branchTeam'));
    }


    public function store(Request $request)
    {
        $this->validate($request,[

            'branch_team_img'=>'nullable',
            'branch_team_position'=>'nullable',
            'branch_team_name'=>'nullable',
            'branch_team_description'=>'nullable',
            'branch_id'=>'required|exists:branches,id'
        ]);

        $branch_team_img = $request->branch_team_img;
        $newBranchTeamImage = time().$branch_team_img->getClientOriginalName();
        $branch_team_img->move('images',$newBranchTeamImage);


        $branchTeam = BranchTeam::create([
            'id' => Auth::id(),
            'branch_id' =>  $request->branch_id,
            'branch_team_img' => 'images/'.$newBranchTeamImage,
            'branch_team_position' => $request->branch_team_position,
            'branch_team_name' => $request->branch_team_name,
            'branch_team_description' => $request->branch_team_description,

        ]);
        return redirect()->back();
    }


    public function show()
    {
        //
    }


    public function edit($id)
    {
        $branchTeam = BranchTeam::find($id);
        return view('admin.branchTeam.edit', compact('branchTeam'));
    }


    public function update(Request $request, $id)
    {
        $branchTeam = BranchTeam::find($id);
        $this->validate($request,[
            'branch_team_img'=>'nullable',
            'branch_team_position'=>'nullable',
            'branch_team_name'=>'nullable',
            'branch_team_description'=>'nullable',
            'branch_id'=>'required|exists:branches,id'
        ]);

        if ($request->has('branch_team_img')){
            $branch_team_img = $request->branch_team_img;
            $newBranchTeamImage = time().$branch_team_img->getClientOriginalName();
            $branch_team_img->move('images',$newBranchTeamImage);
            $branchTeam->branch_team_img='images/'.$newBranchTeamImage;
        }

        $branchTeam->branch_team_position = $request->branch_team_position;
        $branchTeam->branch_team_name = $request->branch_team_name;
        $branchTeam->branch_team_description = $request->branch_team_description;
        $branchTeam->save();
        return redirect()->route('branchsTeam')->with('success','header updated successfully');
    }


    public function destroy($id)
    {
        $branchTeam = BranchTeam::withTrashed()->where('id',$id)->first();
        $branchTeam->forceDelete();
        return redirect()->back();
    }


    public function softDestroy($id)
    {
        $branchTeam = BranchTeam::find($id);
        $branchTeam->delete();
        return redirect()->back();
    }


    public function restore($id)
    {
        $branchTeam = BranchTeam::withTrashed()->where('id',$id)->first();
        $branchTeam->restore();
        return redirect()->back();
    }
}
