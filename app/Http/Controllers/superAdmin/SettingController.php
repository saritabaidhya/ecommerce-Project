<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\superAdmin\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {

            $settings = Setting::all();
            return view('superAdmin.settings.index',compact('settings'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        if (Auth::check()) {
            return view('superAdmin.settings.edit', compact('setting'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        // Validate the input data
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update the record
        $setting->name = $request->input('name');
        $setting->address = $request->input('address');
        $setting->phone = $request->input('phone');
        $setting->email = $request->input('email');
        $setting->website = $request->input('website');
        $setting->map = $request->input('map');
        $setting->facebook = $request->input('facebook');
        $setting->instagram = $request->input('instagram');
        $setting->youtube = $request->input('youtube');
        $setting->meta_keyword = $request->input('meta_keyword');
        $setting->meta_description = $request->input('meta_description');
        $setting->detail = $request->input('detail');
        $setting->hidden = $request->input('hidden');
        $setting->title = $request->input('title');
        $setting->duration = $request->input('duration');
        

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($setting->path) {
                Storage::delete('public/images/' . $setting->path);
            }

            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
            $setting->path = $imageUrl;
        }

        $setting->save();

        // Redirect and send message
        return redirect()->route('settings.index')->with('success', 'Setting updated successfully');
    }


}
