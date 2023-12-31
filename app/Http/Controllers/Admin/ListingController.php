<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Photo;
use App\Helper\Helper;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listings = Listing::where('user_id', auth()->user()->id)->paginate(5);
        return view('admin/listings/index', [
            'listings' => $listings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Listing::class);
        return view('admin/listings/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Listing::class);

        request()->validate([
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'squarefootage' => 'required|integer',
            'price' => 'required|decimal:2',
            'property_type' => 'required',
            'listing_type' => 'required',
        ]);

        $listing = new Listing();
        $listing->user_id = auth()->user()->id;
        $listing->address = $request->get('address');
        $listing->address2 = $request->get('address2');
        $listing->city = $request->get('city');
        $listing->state = $request->get('state');
        $listing->zipcode = $request->get('zipcode');
        $listing->bedrooms = $request->get('bedrooms');
        $listing->bathrooms = $request->get('bathrooms');
        $listing->squarefootage = $request->get('squarefootage');
        $listing->price = $request->get('price');
        $listing->property_type = $request->get('property_type');
        $listing->listing_type = $request->get('listing_type');
        
        $listing->published = 0;
        $listing->status = 'on-market';
        
        $listing->slug = Helper::slugify("{$request->address}-{$request->address2}-{$request->city}-{$request->state}-{$request->zipcode}");

        $listing->save();

        return redirect("/admin/listings/{$listing->slug}/{$listing->id}/edit")->with('success', 'Successfully Created New Listing');
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
    public function edit($slug, $id)
    {
        $listing = Listing::where([
            
                'id' => $id,
                'slug' => $slug
            
            ])->first();

        $this->authorize('update', $listing);
        
        // return $listing;
        return view('admin/listings/edit', ['listing' => $listing]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug, $id)
    {
        request()->validate([
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'squarefootage' => 'required|integer',
            'price' => 'required|decimal:2',
            'property_type' => 'required',
            'listing_type' => 'required',
        ]);

        $listing = Listing::where([
            
            'id' => $id,
            'slug' => $slug
        
        ])->first();

        $this->authorize('update', $listing);

        $listing->address = $request->get('address');
        $listing->address2 = $request->get('address2');
        $listing->city = $request->get('city');
        $listing->state = $request->get('state');
        $listing->zipcode = $request->get('zipcode');
        $listing->bedrooms = $request->get('bedrooms');
        $listing->bathrooms = $request->get('bathrooms');
        $listing->squarefootage = $request->get('squarefootage');
        
        $listing->published = $request->get('published');
        $listing->status = 'on-market';
        
        $listing->description = $request->get('description');
        $listing->price = $request->get('price');
        $listing->property_type = $request->get('property_type');
        $listing->listing_type = $request->get('listing_type');
        
        $listing->slug = Helper::slugify("{$request->address}-{$request->address2}-{$request->city}-{$request->state}-{$request->zipcode}");

        $listing->save();

        return redirect("/admin/listings/{$listing->slug}/{$listing->id}/edit")->with('success', 'Successfully Updated Listing');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug, $id)
    {
        $listing = Listing::find($id);

        $this->authorize('delete', $listing);
        
        $listing->delete();

        return redirect("/admin/listings")->with('success', 'Successfully Deleted Listing');
    }
}
