@extends('layouts.main')


@section('content')

<div class="saved-listings-page">
    <div class="listings-city">
        <img class="listings-city__img" src="https://www.architectureartdesigns.com/wp-content/uploads/2019/01/modern-box-home-design.jpg" alt="">
        <h1 class="listings-city__title">Saved Listings</h1>
    </div>

    <div class="listings-properties">
        <div class="container">
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                <div class="col-md-6 col-lg-4 col-xl-3">
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
    </div>
</div>

@endsection