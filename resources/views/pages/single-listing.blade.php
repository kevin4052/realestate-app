@extends('layouts.main')


@section('page-title', '1234 Grand Ave - Hernandez Realty')
@section('content')

<div class="single-listing-page">
    <div class="listing-top">
        <img class="listing-top__img" src="https://image.cnbcfm.com/api/v1/image/105722431-1549456372715indian2.jpg?v=1549456442" alt="">
        <div class="listing-top__form-wrapper">
            <div class="container">
                <form class="listing-top__form" action="">
                    <label class="listing-top__form-label">Schedule a tour</label>
                    <div class="listing-top__form-group listing-top__form-group--horz">
                        <div class="listing-top__form-option">In-Person</div>
                        <div class="listing-top__form-option">Video</div>
                    </div>

                    <label class="listing-top__form-label">Date</label>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">Feb 26, 2022</div>
                    </div>

                    <label class="listing-top__form-label">Choose A Time</label>
                    <div class="listing-top__form-group listing-top__form-group--horz">
                        <div class="listing-top__form-option">1:00 PM</div>
                        <div class="listing-top__form-option">2:00 PM</div>
                    </div>

                    <label class="listing-top__form-label">Phone</label>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">Enter Phone</div>
                    </div>

                    <label class="listing-top__form-label">Email</label>
                    <div class="listing-top__form-group">
                        <div class="listing-top__form-option">Enter Email</div>
                    </div>

                    <div class="listing-top__form-group">
                        <button type="submit" class="listing-top__form-button">Schedule A Tour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection