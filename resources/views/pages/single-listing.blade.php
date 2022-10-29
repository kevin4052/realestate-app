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
    <section class="listing-info">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>123 Street</br> Miami, FL 12345</h1>
                    <div class="listing-info__details">
                        <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i> 4 </span>
                        <span class="listing-info__details-text"><i class="fa-solid fa-bath"></i> 4 </span>
                        <span class="listing-info__details-text"><i class="fa-solid fa-ruler"></i> 4,000 SQFT</span>
                    </div>
                </div>
                <div class="col-md-5">
                    <span class="listing-info__agent-title">Agent</span>
                    <span class="listing-info__agent-name">John Smith</span>
                    <p class="listing-info__agent-profile">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore ea ullam dolor architecto voluptatem inventore laudantium reiciendis mollitia ut reprehenderit cum hic, ratione, nam enim sed quae distinctio illo totam.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="listing-extras">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="listing-extras__details">
                        <h2>More Info</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quisquam numquam vel 
                            explicabo adipisci eveniet iusto culpa blanditiis, perferendis exercitationem 
                            eligendi laboriosam atque cupiditate non officia ea fugit consequatur saepe.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quisquam numquam vel 
                            explicabo adipisci eveniet iusto culpa blanditiis, perferendis exercitationem 
                            eligendi laboriosam atque cupiditate non officia ea fugit consequatur saepe.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quisquam numquam vel 
                            explicabo adipisci eveniet iusto culpa blanditiis, perferendis exercitationem 
                            eligendi laboriosam atque cupiditate non officia ea fugit consequatur saepe.
                        </p>
                        <h3>Details</h3>
                        <ul>
                            <li>Test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                            <li>test</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="listing-extras__gallery">
                        <h2>Images</h2>
                        @for ($i = 0; $i < 3; $i++)
                        <img src="https://image.cnbcfm.com/api/v1/image/105722431-1549456372715indian2.jpg?v=1549456442" alt="">
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection