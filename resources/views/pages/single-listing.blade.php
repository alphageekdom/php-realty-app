@extends('layouts.main')

@section('page-title', 'All Properties - A|G Realty')
@section("content")
<div class="single-listing-page">
    <div class="listing-top">
        @foreach ($photos as $photo) 
            @if ($photo->featured)
                <img class="listing-top__img" src="/img/{{$photo->name}}" alt="Listed House" />
            @endif
        @endforeach
        <div class="listing-top__form-wrapper">
            <div class="container">
                <form action="" class="listing-top__form">
                    <label class="listing-top__form-label">Schedule A Tour</label>
                    <div class="listing-top__form-group listing-top__form-group--horizontal">
                        <div class="listing-top__form-option">In-Person</div>
                        <div class="listing-top__form-option">Video</div>
                    </div>
                    <label class="listing-top__form-label">Date</label>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">10 / 12 / 2030</div>
                    </div>
                    <label class="listing-top__form-label">Time</label>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">11 AM PST</div>
                    </div>
                    <label class="listing-top__form-label">Personal Info</label>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">Phone Number</div>
                    </div>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">Email</div>
                    </div>
                    <div class="listing-top__form-group">
                        <button type="submit" class="listing-top__form-button">Schedule</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section class="listing-info">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>{{ $listing->address }} {{ $listing->address2 }}<br>
                        {{ $listing->city }}, {{ $listing->state }} {{ $listing->zipcode }}
                    </h1>
                    <div class="listing-info__details">
                        <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i> {{ $listing->bedrooms }}</span>
                        <span class="listing-info__details-text"><i class="fa-solid fa-bath"></i> {{ $listing->bathrooms }}</span>
                        <span class="listing-info__details-text"><i class="fa-solid fa-ruler"></i> SQFT{{ $listing->squarefootage }}</span>
                    </div>
                </div>
                <div class="col-md-5">
                    <span class="listing-info__agent-title">Agent</span>
                    <span class="listing-info__agent-name">{{ $listing->user->name }}</span>
                    <p class="listing-info__agent-profile">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni, explicabo aliquid ab quisquam, quaerat perferendis alias qui mollitia fugit unde ipsam? Dolores illo sapiente similique perferendis non quasi distinctio commodi.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="listing-extras">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="listing-extras__details">
                        <h2>More Info</h2>
                        <p>{{ $listing->description }}</p>
                        {{-- <h3>Extras</h3>
                        <ul>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                            <li>Test</li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="listing-extras__gallery">
                        <h2>Images</h2>
                        @foreach ($photos as $photo) 
                            @if (!$photo->featured)
                                <img src="/img/{{$photo->name}}" alt="Listed House"/>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection