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
            <div class="listings-filter__option">
                <label class="form-label" for="inputState">State</label> 
                <select id="inputState" class="form-control">
                    <option selected="selected">Choose...</option>
                    <option>...</option>
                </select>
            </div>
            {{-- <div class="listings-filter__option"> 
                <label class="form-label" for="isPublished">Any Price <i class="fa-solid fa-chevron-down"></i></label>
                <select name="" id="">
                    <option value="">Any Price</option>
                    <option value="">1</option>
                    <option value="">2</option>
                </select> 
            </div> --}}
            <div class="listings-filter__option">All Beds <i class="fa-solid fa-chevron-down"></i></div>
            <div class="listings-filter__option">Home Type <i class="fa-solid fa-chevron-down"></i></div>
            <div class="listings-filter__option">More <i class="fa-solid fa-chevron-down"></i></div>
            <div class="listings-filter__button">Search</div>
        </div>
    </div>

    <div class="listings-properties">
        <div class="container">
            <div class="row">
                @foreach ($listings as $listing)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a class="listings-properties__item" href="/listing/{{$listing->slug}}/{{$listing->id}}">
                            @foreach ($listing->photos as $photo)
                                @if ($photo->featured)
                                    <img src="/img/{{$photo->name}}" alt="listing image">
                                @endif
                            @endforeach
                            <div class="listings-properties__item-saved">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <div class="listings-properties__item-info">
                                <span class="listings-properties__item-price">${{$listing->price}} </span>
                                <span class="listings-properties__item-details">
                                    <i class="fa-solid fa-bed"></i> {{$listing->bedrooms}} 
                                    <i class="fa-solid fa-bath"></i> {{$listing->bathrooms}} 
                                    <i class="fa-solid fa-ruler"></i> {{$listing->squarefootage}} SQFT
                                </span>
                                <span class="listings-properties__item-address">
                                    {{$listing->address}} {{$listing->address2}}</br> 
                                    {{$listing->city}}, {{$listing->state}} {{$listing->zipcode}}
                                </span>
                                <div class="listings-properties__item-line"></div>
                                <span class="listings-properties__item-owner">{{$listing->user->name}}</span>
                            </div>
                        </a>        
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection