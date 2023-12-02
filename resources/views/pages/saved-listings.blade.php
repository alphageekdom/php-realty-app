@extends('layouts.account')

@section('page-title', 'User Saved Listings - A|G Realty')
@section('page-bg', 'https://images.unsplash.com/photo-1517331028157-75de91e10628?q=80&w=3269&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')
@section("content")
<div class="listings-properties">
    
    <div class="row">
        <div class="col-sm-12 col-lg-4 col-xl-4">
            <div class="listings-properties__item">
                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=3275&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Property Image" />
                <div class="listings-properties__item-saved">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <span class="listings-properties__item-price">$250,000</span>
                <span class="listings-properties__item-details">BD <i class="fa-solid fa-bed"></i> 4 BA <i class="fa-solid fa-bath"></i> 3 SQ <i class="fa-solid fa-ruler"></i> 2,340</span>
                <span class="listings-properties__item-address">
                    417 Champlin Ridges, <br> 
                    Thaddeusview, RI 10040
                </span>
                <div class="listings-properties__item-line"></div>
                <span class="listings-properties__item-owner">
                    Tommie R. Williams Realty
                </span>
            </div>
        </div>
    </div>
</div>
@endsection