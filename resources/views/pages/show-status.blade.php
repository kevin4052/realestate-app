@extends('layouts.account')

@section('page-title', 'Listing Request status - Hernandez Realty')
{{-- @section('title', 'Saved Listings') --}}
@section('page-bg', 'https://images.ctfassets.net/gxwgulxyxxy1/7JUAAE9H6bILiqzjH5h1FG/4f393d1b655e4787d5bc471c81966736/Hero_-_A_six-bedroom_oceanfront_mansion_with_a_pool_in_Miami_Beach.jpg')

@section('content')
<div class="request-list">
    <h2>All Requests</h2>
    @for ($i = 0; $i < 5; $i++)
    <div class="request-list__wrapper">
        <div>
            <h3>1234 Grand Ave, Miami Beach, FL 33333 </h3>
            <span class="request-list__details">
                <i class="fa-solid fa-bed"></i> 4 
                <i class="fa-solid fa-bath"></i> 4 
                <i class="fa-solid fa-ruler"></i> 4,000 SQFT
            </span>
        </div>
        <div class="request-list__info">
            <span class="request-list__info-title">status</span>
            <span class="request-list__info-status 
                request-list__info-status--success 
                request-list__info-status--canceled 
                request-list__info-status--sold">
                Success
            </span>
        </div>
    </div>
    @endfor
</div>
@endsection