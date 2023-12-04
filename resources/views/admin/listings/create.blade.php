@extends('layouts.admin')
@section('page-title', 'Create A Listing')
@section('content')

<div id="mainContent">
    <div class="col-md-6">
        <div class="bgc-white p-20 bd">
            <h1>Create A Listing</h1>
            <div class="mT-30">
                <form method="POST" action="{{ route('admin.listings.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" value="{{old('address')}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address2">Address 2</label>
                        <input type="text" class="form-control" name="address2" id="address2"
                            placeholder="Apartment, studio, or floor" value="{{old('address2')}}" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="New York City" value="{{old('citry')}}"/>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="state">State</label>
                            <select name="state" id="state" class="form-control">
                                <option value="CA" @selected(old('version') == 'CA') @endif>California</option>
                                <option value="CO"  @selected(old('version') == 'CO')>Colorado</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label" for="zipcode">Zip Code</label>
                            <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="99999" value="{{old('zipcode')}}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="bedrooms">Bedrooms</label>
                            <input type="text" class="form-control" name="bedrooms" id="bedrooms" placeholder="5" value="{{old('bedrooms')}}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="bathrooms">Bathrooms</label>
                            <input type="text" class="form-control" name="bathrooms" id="bathrooms" placeholder="2.3" value="{{old('bathrooms')}}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="squarefootage">SQFT</label>
                            <input type="text" class="form-control" name="squarefootage" id="squarefootage"
                                placeholder="2,433" value="{{old('squarefootage')}}" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-color">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection