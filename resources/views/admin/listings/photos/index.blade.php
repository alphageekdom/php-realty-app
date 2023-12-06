@extends('layouts.admin')
@section('page-title', 'Show Photo Listings')
@section('content')

<div id="mainContent">
    <h1>Show Photos Listings</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $photos as $photo )
                            <tr>
                                <th scope="row">{{ $photo->id }}</th>
                                <td>
                                    <img src="/img/{{ $photo->name }}" alt="" />
                                </td>
                                <td>
                                    {{ $photo->name }}
                                    {{-- @if ($listing->status == 'published')
                                        <div class="btn cur-p btn-success btn-color" style="width: 100px; text-transform: capitalize;">
                                            {{ $listing->status }}
                                        </div>
                                    @else
                                        <div class="btn cur-p btn-warnging btn-color" style="background-color: #FFAC1C; border: solid #FFAC1C; width: 100px; text-transform: capitalize;">
                                            {{ $listing->status }}
                                        </div>
                                    @endif --}}
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