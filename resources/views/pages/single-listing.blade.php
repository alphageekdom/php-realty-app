@extends('layouts.main')

@section('page-title', 'All Properties - A|G Realty')
@section("content")
<div class="single-listing-page">
    <div class="listing-top">
        <img class="listing-top__img" src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?q=80&w=3000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Listed House"/>
        <div class="listing-top__form-wrapper">
          <div class="container">
            <form action="" class="listing-top__form">
                <span class="listing-top__form-title">Schedule A Tour</span>
                <div class="listing-top__form-group listing-top__form-group--horizontal">
                    <div class="listing-top__form-option">In-Person</div>
                    <div class="listing-top__form-option">Video</div>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection