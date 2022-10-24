@extends('layouts.main')


@section('content')

<div class="listings-page">
    <div class="listing-city">
        <img class="listings-city__img" src="https://www.architectureartdesigns.com/wp-content/uploads/2019/01/modern-box-home-design.jpg" alt="">
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
</div>

@endsection