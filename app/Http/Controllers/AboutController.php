<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutOurTeam;
use App\Models\AboutFuture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage as FacadesStorage;


class AboutController extends Controller

{

    public function index()
    {
        $about = About::latest()->paginate(10);
        return view('admin.about.index', compact('about'));
    }

    public function aboutTrashed()
    {
        $about = About::onlyTrashed()->get();
        return view('admin.about.trashed', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'description'=>'nullable',
            'about_img'=>'nullable',
            'mission'=>'nullable',
            'vision'=>'nullable',
            'our_value'=>'nullable',

        ]);


      
   /*  $about_img = $request->file('about_img');  
     if($about_img){
     if (!empty($request->input('about_img'))) {
       $extension =  $about_img->getClientOriginalExtension();  
       $about_img = is_null($about_img) ? $extension : $about_img;
       $about_img = is_null($about_img) ? ' ' : $about_img;

        $about_img =  base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $about_img));
        $newAboutImage = time() .'.'. $extension ;
        $path = public_path( '/images/' . $newAboutImage) ;
       $about = file_put_contents($path, $about_img); 
     }}*/

      /* $about_img = $request->about_img;
        $newAboutImage = time().$about_img->getClientOriginalName();
        $about_img->move('images',$newAboutImage);*/



       if ($request->has('about_img')) {
            if (!empty($request->input('about_img'))) {
                $extention = explode(";",explode("/",$request->about_img)[1])[0];
                $about_img = rand(1,5000)."_about_img.".$extention;
                $filePath = public_path('images/'.$about_img);
                $fp = file_put_contents($filePath,base64_decode(explode(",",$request->about_img)[1]));
            }
        }
        
   



       /* // Capture the cropped image data from Croppie.js
        $about_img = $request->input('about_img');

        // Convert the base64-encoded image data to binary
        $about_img = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $about_img));

        // Create a new record in the database table
        $image = new About;
        $image->name = $request->input('about_img');
        $image->about_img = $about_img;
        $image->save();

        // Store the image data as a file
        $newAboutImage = $image->id . '.jpg'; // or any other image extension
        FacadesStorage::disk('public/images')->put($newAboutImage, $about_img);

        // Update the record with the path to the stored image file
        $image->image_path = $newAboutImage;
        $image->save();*/



         
           /*  $about_img = $request->image;

             $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $about_img));
             $newAboutImage = time() . '.png';
             $upload_path = public_path('images/' . $newAboutImage);
             file_put_contents($upload_path, $data);
             return response()->json(['path' => '/images/' . $newAboutImage]);*/
           

             $about = About::create([
                'id' => Auth::id(),
                'description' => $request->description,
                'about_img' => $filePath,
                'mission' => $request->mission,
                'vision' => $request->vision,
                'our_value' => $request->our_value,
    
    
    
            ]);


        return redirect()->back()->with('success');

       
    }


    function decodeBase64Image($base64Image) {

        // Decode the base64-encoded image
        $imageData = base64_decode(explode(",",$base64Image)[1]);

        // Get the image size and type
        list($width, $height, $type) = getimagesizefromstring($imageData);

        // Get the file type
        $fileType = image_type_to_mime_type($type);

        // Get the file size in bytes
        $fileSize = strlen($imageData);

        // Generate a unique file name
        $fileName = "_".uniqid() . '.' . explode("/",$fileType)[1];

        // Return an associative array containing the file name, file size, and file type
        return array(
            'name' => $fileName,
            'size' => $fileSize,
            'type' => $fileType
        );
    }




    public function show()
    {
        $about_all = About::all();
        $about = About::select('description','about_img','mission','vision','our_value')->first();

        $aboutTeamAll = AboutOurTeam::all();
        $aboutTeam = AboutOurTeam::select('team_name','team_position','team_description','team_img')->first();

        $aboutFutureAll = AboutFuture::all();
        $aboutFuture = AboutFuture::select('future_name','future_description','future_img')->first();

        return view('site.about', compact('about','about_all','aboutTeamAll','aboutFutureAll'));
    }


    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.about.edit', compact('about'));
    }


    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $this->validate($request,[
            'description'=>'nullable',
            'about_img'=>'nullable',
            'mission'=>'nullable',
            'vision'=>'nullable',
            'our_value'=>'nullable',

        ]);

        if ($request->has('about_img')){

            $about_img = $request->about_img;
            $newAboutImage = time().$about_img->getClientOriginalName();
            $about_img->move('images',$newAboutImage);
            $about->about_img='images/'.$newAboutImage;
        }

        $about->description = $request->description;
        $about->mission = $request->mission;
        $about->vision = $request->vision;
        $about->our_value = $request->our_value;
        $about->save();

        return redirect()->route('about')->with('success','header updated successfully');


    }


    public function destroy($id)
    {
        $about = About::withTrashed()->where('id',$id)->first();
        $about->forceDelete();
        return redirect()->back();
    }


    public function softDestroy($id)
    {
        $about = About::find($id);
        $about->delete();
        return redirect()->back();
    }


    public function restore($id)
    {
        $about = About::withTrashed()->where('id',$id)->first();
        $about->restore();
        return redirect()->back();
    }

}
