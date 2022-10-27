@extends('layouts.account')

@section('title', 'Saved Listings')
@section('page-title', 'Saved Listings')
@section('page-bg', 'https://www.architectureartdesigns.com/wp-content/uploads/2019/01/modern-box-home-design.jpg')

@section('content')
<div class="listings-properties">
    <div class="row">
        @for ($i = 0; $i < 5; $i++)
        <div class="col-md-12 col-lg-4 col-xl-4">
            <div class="listings-properties__item">
                <img class="" src="https://www.architectureartdesigns.com/wp-content/uploads/2019/01/modern-box-home-design.jpg" alt="listing image">
                <div class="listings-properties__item-saved">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="listings-properties__item-info">
                    <span class="listings-properties__item-price">$250,000</span>
                    <span class="listings-properties__item-details">
                        <i class="fa-solid fa-bed"></i> 4 
                        <i class="fa-solid fa-bath"></i> 4 
                        <i class="fa-solid fa-ruler"></i> 4,000 SQFT
                    </span>
                    <span class="listings-properties__item-address">123 Street, <br/> Miami, FL 12345</span>
                    <div class="listings-properties__item-line"></div>
                    <span class="listings-properties__item-owner">Kevin Hernandez</span>
                </div>
            </div>        
        </div>
        @endfor
    </div>
</div>
@endsection