<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\superAdmin\Media;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check()){

            $medias = Media::all();
            return view('superAdmin.medias.index',compact('medias'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('superAdmin.medias.create');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add any additional validation rules as needed
        ]);

        $imagePath = $request->file('image')->store('public/images');
        $imageUrl = basename($imagePath);

      

        $utility= Media::create([
            'path' => $imageUrl,
            'title' => $request->input('title'),
           
        ]);

        return redirect()->route('medias.index')->with('success', 'Media Created Sucessfully');
    }

  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $media)
    {
        $media->delete();
        return redirect()->route('medias.index')->with('success', 'Media Deleted Sucessfully');
    }
}
