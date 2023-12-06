<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\User;
use App\Helper\Helper;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug, $id)
    {
        $photos = Photo::where(['user_id' => auth()->user()->id, 'listing_id' => $id])->paginate(5);

        if($photos->total() < 1 ) {
            return redirect("/admin/listings/{$slug}/{$id}/photos/create");
        }

        return view('admin/listings/photos/index', [
            'photos' => $photos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($slug, $id)
    {
        return view('admin/listings/photos/create', [
            'slug' => $slug,
            'id' => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug, $id)
    {
        request()->validate([
            'image' => 'required|image',
        ]);

        $newName = time() . '-' . $request->file('image')->getClientOriginalName();
        $size = $request->file('image')->getSize();
        $name = $newName;
        $request->file('image')->move(public_path('img'), $name);

        $photo = new Photo();
        $photo->name = $name;
        $photo->size = $size;
        $photo->user_id = auth()->user()->id;
        $photo->listing_id = $id;
        $photo->save();
        
        // $listing->slug = Helper::slugify("{$request->address}-{$request->address2}-{$request->city}-{$request->state}-{$request->zipcode}");


        return redirect("/admin/listings/{$slug}/{$id}/photos")->with('success', 'Successfully Created New Listing');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
