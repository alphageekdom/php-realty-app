@extends('layouts.main')

@section('page-title', 'All Properties - A|G Realty')
@section("content")
<div class="single-listing-page">
    <div class="listing-top">
        <img class="listing-top__img" src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?q=80&w=3000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Listed House"/>
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
</div>
@endsection