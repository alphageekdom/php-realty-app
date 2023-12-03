@extends('layouts.account')

@section('page-title', 'Listing Request Status - A|G Realty')
@section('page-bg',
'https://images.unsplash.com/photo-1517331028157-75de91e10628?q=80&w=3269&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')
@section("content")
<div class="request-list">
    <h2>All Requests</h2>
    @for ($i = 1; $i <= 10; $i++)
        <div class="request-list__wrapper">
            <div>
                <h3>2667 Fahey Trail</h3>
                <span class="request-list__details">
                    BD <i class="fa-solid fa-bed"></i> 4 BA <i class="fa-solid fa-bath"></i> 3 SQ <i
                        class="fa-solid fa-ruler"></i> 2,340
                </span>
            </div>
            <div class="request-list__info">
                <span class="request-list__info-title">
                    Status
                </span>
                <div
                    class="request-list__info-status request-list__info-status--success request-list__info-status--cancelled request-list__info-status--sold">
                    Success
                </div>
            </div>
        </div>
    @endfor
    
</div>
@endsection