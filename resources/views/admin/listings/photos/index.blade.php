@extends('layouts.admin')
@section('page-title', 'Show Photo Listings')
@section('content')

<div id="mainContent">
    <div class="row">
        <div class="col-md-8">
            <h1>Show Photos Listings</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('admin.listings.edit', ['slug' => $slug, 'id' => $id]) }}"
                class="btn cur-p btn-secondary btn-upload"><i class="fa-solid fa-left-long"></i> Edit Listing</a>
        </div>
        <div class="col-md-2">
            <div class="row">
                <a href="{{ route('admin.listings.photos.create', ['slug' => $slug, 'id' => $id]) }}"
                    class="btn cur-p btn-dark btn-upload"><i class="fa-solid fa-upload"></i> Upload Photo</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $photos as $photo )
                            <tr>
                                <th scope="row">{{ $photo->id }}</th>
                                <td>
                                    <img src="/img/{{ $photo->name }}" alt="" class="photo-img" />
                                </td>
                                <td>
                                    {{ $photo->name }}
                                </td>
                                <td>
                                    @if ($photo->featured)
                                    <div class="btn cur-p btn-success btn-color" style="text-transform: capitalize;">
                                        <i class="fa-solid fa-check"></i> Highlight
                                    </div>
                                    @else
                                        
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.listings.photos.featured', ['slug' => $slug, 'id' => $id, 'photo_id' => $photo->id]) }}"
                                        onclick="return confirm('Are you sure?')"
                                        class="btn cur-p btn-info btn-featured"><i class="fa-solid fa-star"></i> Featured</a>

                                        <a href="{{ route('admin.listings.photos.destroy', ['slug' => $slug, 'id' => $id, 'photo_id' => $photo->id]) }}"
                                            onclick="return confirm('Are you sure you want to delete this photo?')"
                                            class="btn btn-danger btn-color"><i class="fa-solid fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $photos->links() }}
            </div>
        </div>
    </div>
</div>

@endsection