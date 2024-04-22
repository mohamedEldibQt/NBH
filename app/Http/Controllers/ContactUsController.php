<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ContactUsController extends Controller
{

    public function index()
    {
        $contacts = ContactUs::latest()->paginate(10);
        return view('admin.contactUs.index', compact('contacts'));
    }


    public function contactTrashed()
    {
        $contacts = ContactUs::onlyTrashed()->get();
        return view('admin.contactUs.trashed', compact('contacts'));
    }


    public function create()
    {
        return view('site.contact');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name_contact'=>'nullable',
            'email_contact'=>'nullable',
            'phone_contact'=>'nullable',
            'massage_contact'=>'nullable',
        ]);


        $contacts = ContactUs::create([
            'id' => Auth::id(),
            'name_contact' => $request->name_contact,
            'email_contact' => $request->email_contact,
            'phone_contact' => $request->phone_contact,
            'massage_contact' => $request->massage_contact,

        ]);
        return redirect()->back();

    }


    public function show(ContactUs $contactUs)
    {
        //
    }


    public function edit(ContactUs $contactUs)
    {
        //
    }


    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }


    public function destroy($id)
    {
        $contacts = ContactUs::withTrashed()->where('id',$id)->first();
        $contacts->forceDelete();
        return redirect()->back();
    }


    public function softDestroy($id)
    {
        $contacts = ContactUs::find($id);
        $contacts->delete();
        return redirect()->back();
    }


    public function restore($id)
    {
        $contacts = ContactUs::withTrashed()->where('id',$id)->first();
        $contacts->restore();
        return redirect()->back();
    }

}
