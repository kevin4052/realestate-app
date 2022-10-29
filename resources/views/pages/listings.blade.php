@extends('layouts.main')


@section('page-title', 'All Properties - Hernandez Realty')
@section('content')

<div class="listings-page">
    <div class="listing-city">
        <img class="listings-city__img" src="https://image.cnbcfm.com/api/v1/image/105722431-1549456372715indian2.jpg?v=1549456442" alt="">
        <h1 class="listings-city__title">Miami</h1>
    </div>
    <div class="listings-filter">
        <div class="listings-filter__wrapper">
            <div class="listings-filter__option">Any Price <i class="fa-solid fa-chevron-down"></i></div>
            <div class="listings-filter__option">All Beds <i class="fa-solid fa-chevron-down"></i></div>
            <div class="listings-filter__option">Home Type <i class="fa-solid fa-chevron-down"></i></div>
            <div class="listings-filter__option">More <i class="fa-solid fa-chevron-down"></i></div>
            <div class="listings-filter__button">Search</div>
        </div>
    </div>

    <div class="listings-properties">
        <div class="container">
            <div class="row">
                @for ($i = 0; $i < 10; $i++)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <a class="listings-properties__item" href="/listing/123-Street-Miami-FL-12345/1">
                        <img class="" src="https://image.cnbcfm.com/api/v1/image/105722431-1549456372715indian2.jpg?v=1549456442" alt="listing image">
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
                    </a>        
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>

@endsection