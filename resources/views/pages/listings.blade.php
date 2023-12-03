@extends('layouts.main')

@section('page-title', 'All Properties - A|G Realty')
@section("content")
<div class="listings-page">
    <div class="listings-city">
        <img class="listings-city__img"
            src="https://images.unsplash.com/photo-1448630360428-65456885c650?q=80&w=3267&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Modern House" />
        <h1 class="listings-city__title">South Beach</h1>
    </div>
    <div class="listings-filter">
        <div class="listings-filter__wrapper">
            <div class="listings-filter__option">
                Any Price <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__option">
                All Beds <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__option">
                Home Type <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__option">
                More <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__button">
                Search
            </div>
        </div>
    </div>
    <div class="listings-properties">
        <div class="container">
            <div class="row">
                @for ($i = 1; $i <= 12; $i++)
                    @include('components.listing-card') 
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection