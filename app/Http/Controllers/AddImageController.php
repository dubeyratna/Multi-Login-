<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddImage;

class AddImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addimages=AddImage::all();
        return view('add_image.index', compact('addimages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_image.create', compact('addimages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $photo_url = time().'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $file->move($destinationPath, $photo_url);
        $request->request->add(['hero_image_url' => $photo_url]);

        AddImage::create($request->all());
        return redirect('/addimage')->with('status', 'Image Created Successfully');
    }
}