@extends('layouts.admin')
@section('page-title', 'Show All Listings')
@section('content')

<div id="mainContent">
    <form method="POST" action="{{ route('admin.listings.update', ['slug' => $listing->slug, 'id' => $listing->id]) }}">
        @csrf
        @method('PUT')
        <div class="row">
            {{-- Form Secition --}}
            <div class="col-md-9">
                <div class="bgc-white p-20 bd">
                    <h1>Edit Listing</h1>
                    <div class="mT-30">
                        <div class="mb-3">
                            <h3>Address</h3>
                            <label class="form-label" for="address">Address</label>
                            <input type="text" class="form-control" name="address" id="address"
                                placeholder="ex.  1234 Main St" value="{{old('address', $listing->address)}}">
                            @error('address')
                            <div class="error-sub-text">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address2">Address 2</label>
                            <input type="text" class="form-control" name="address2" id="address2"
                                placeholder="ex.  Apartment, studio, or floor"
                                value="{{old('address2', $listing->address2)}}" />
                            @error('address2')
                            <div class="error-sub-text">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="city">City</label>
                                <input type="text" class="form-control" name="city" id="city"
                                    placeholder="ex.  New York City" value="{{old('city', $listing->city)}}" />
                                @error('city')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="state">State</label>
                                <select name="state" id="state" class="form-control">
                                    <option value="CA" @selected(old('state', $listing->state) == 'CA') >California
                                    </option>
                                    <option value="CO" @selected(old('state', $listing->state) == 'CO')>Colorado
                                    </option>
                                </select>
                                @error('state')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label" for="zipcode">Zip Code</label>
                                <input type="text" class="form-control" name="zipcode" id="zipcode"
                                    placeholder="ex. 99999" value="{{old('zipcode', $listing->zipcode)}}"
                                    maxlength="5" />
                                @error('zipcode')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="bedrooms">Bedrooms</label>
                                <input type="text" class="form-control" name="bedrooms" id="bedrooms"
                                    placeholder="ex. 5" value="{{old('bedrooms', $listing->bedrooms)}}" />
                                @error('bedrooms')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="bathrooms">Bathrooms</label>
                                <input type="text" class="form-control" name="bathrooms" id="bathrooms"
                                    placeholder="ex. 2.3" value="{{old('bathrooms', $listing->bathrooms)}}" />
                                @error('bathrooms')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="squarefootage">SQFT</label>
                                <input type="text" class="form-control" name="squarefootage" id="squarefootage"
                                    placeholder="ex. 2,433" value="{{old('squarefootage', $listing->squarefootage)}}" />
                                @error('squarefootage')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <h3>Details</h3>
                                <label class="form-label" for="desciption">Description</label>
                                <textarea type="text" class="form-control" name="description" id="description" placeholder="ex. Property details...">{{old('description', $listing->description)}}</textarea>
                                @error('description')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="col-md-3">
                <div class="bgc-white p-20 bd">
                    <div class="mT-30">
                        <h3>Settings</h3>
                        <div class="form-group">
                            <label class="form-label" for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="draft" @selected(old('status', $listing->status) == 'draft') >Draft
                                    </option>
                                    <option value="published" @selected(old('status', $listing->status) == 'published')>Published
                                    </option>
                                </select>
                                @error('status')
                                <div class="error-sub-text">
                                    {{$message}}
                                </div>
                                @enderror
                        </div>
                        <div class="form-group" style="display: flex; flex-direction: column; margin-top: 1rem;">
                            <a href="{{ route('admin.listings.photos', ['slug' => $listing->slug, 'id' => $listing->id]) }}"
                                onclick="return confirm('Did you save your updates?')"
                                class="btn cur-p btn-outline-success gallery-btn"><i class="fa-solid fa-image"></i> Gallery</a>
                        </div>
                        <div class="form-group" style="display: flex; flex-direction: column; margin-top: 1rem;">
                            <button type="submit" class="btn btn-primary btn-color"><i class="fa-solid fa-box-archive"></i> Save</button>
                            <a href="{{ route('admin.listings.destroy', ['slug' => $listing->slug, 'id' => $listing->id]) }}"
                                onclick="return confirm('Are you sure you want to delete the listing?')"
                                class="btn btn-danger btn-color"><i class="fa-solid fa-trash"></i> Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


@endsection