<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Triumph;
use Illuminate\Http\Request;


class GalleryController extends Controller
{
	/**
		* Display a listing of the resource.
		*/
	public function index()
	{ 

		$galleries = Triumph::get();
		return view('frontEnd.gallery.index',compact('galleries'));

	}

		public function show($slug)
	{
		$image = Triumph::where('slug', $slug)->firstOrFail();

		return view('frontEnd.gallery.show', compact('image'));
		}



}
