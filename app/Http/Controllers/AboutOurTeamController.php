<?php

namespace App\Http\Controllers;

use App\Models\AboutOurTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AboutOurTeamController extends Controller
{

    public function index()
    {
        $aboutOurTeam = AboutOurTeam::latest()->paginate(10);
        return view('admin.aboutOurTeam.index', compact('aboutOurTeam'));
    }

    public function aboutTrashed()
    {
        $aboutOurTeam = AboutOurTeam::onlyTrashed()->get();
        return view('admin.aboutOurTeam.trashed', compact('aboutOurTeam'));
    }

    public function create()
    {
        return view('admin.aboutOurTeam.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[

            'team_img'=>'nullable',
            'team_position'=>'nullable',
            'team_name'=>'nullable',
            'team_description'=>'nullable',

        ]);

        $team_img = $request->team_img;
        $newTeamImage = time().$team_img->getClientOriginalName();
        $team_img->move('images',$newTeamImage);


        $aboutOurTeam = AboutOurTeam::create([
            'id' => Auth::id(),
            'team_img' => 'images/'.$newTeamImage,
            'team_position' => $request->team_position,
            'team_name' => $request->team_name,


        ]);
        return redirect()->back();

    }


    public function show()
    {   $aboutTeamAll = AboutOurTeam::all();
        $aboutTeam = AboutOurTeam::select('team_name','team_position','team_description','team_img')->first();


        return view('site.about', compact('aboutTeam','aboutTeamAll'));
    }


    public function edit($id)
    {
        $aboutOurTeam = AboutOurTeam::find($id);
        return view('admin.aboutOurTeam.edit', compact('aboutOurTeam'));
    }

    public function update(Request $request, $id)
    {
        $aboutOurTeam = AboutOurTeam::find($id);
        $this->validate($request,[

            'team_img'=>'nullable',
            'team_position'=>'nullable',
            'team_name'=>'nullable',
            'team_description'=>'nullable',

        ]);

        if ($request->has('team_img')){
            $team_img = $request->team_img;
            $newTeamImage = time().$team_img->getClientOriginalName();
            $team_img->move('images',$newTeamImage);
            $aboutOurTeam->team_img='images/'.$newTeamImage;
        }

        $aboutOurTeam->team_position = $request->team_position;
        $aboutOurTeam->team_name = $request->team_name;
        $aboutOurTeam->team_description = $request->team_description;
        $aboutOurTeam->save();
        return redirect()->route('aboutTeam')->with('success','header updated successfully');

    }


    public function destroy($id)
    {
        $aboutOurTeam = AboutOurTeam::withTrashed()->where('id',$id)->first();
        $aboutOurTeam->forceDelete();
        return redirect()->back();
    }


    public function softDestroy($id)
    {
        $aboutOurTeam = AboutOurTeam::find($id);
        $aboutOurTeam->delete();
        return redirect()->back();
    }


    public function restore($id)
    {
        $aboutOurTeam = AboutOurTeam::withTrashed()->where('id',$id)->first();
        $aboutOurTeam->restore();
        return redirect()->back();
    }

}
