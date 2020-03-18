@extends('layouts.app')

@section('title')
    VENTURE
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>
            Explore the Beautiful World
            <br>
            As Easy As One Click
        </h1>
        <p class="mt-3">
            You will see beautiful moments
            <br>
            you've never seen before
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>

    <!-- Body -->
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>
                            Something you've never tried before
                            <br>
                            in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                                <div class="travel-country">{{ $item->title }}</div>
                                <div class="travel-location">{{ $item->location }}</div>
                                <div class="travel-button mt-auto">
                                <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>
                            Companies trusted us with 
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="frontend/images/partner.png" alt="Logo Partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            Moments were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/testimonial-1.png') }}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Aldo Hadinata</h3>
                                <p class="testimonial">
                                    "It was an amazing experience <br>
                                    and I did not regret <br>
                                    it at all"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/testimonial-2.png') }}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Karyn</h3>
                                <p class="testimonial">
                                    "I will never forget <br>
                                    this trip for the <br>
                                    rest of my life. <br>
                                    Amazing!!!"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Malang
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/testimonial-3.png') }}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Nata</h3>
                                <p class="testimonial">
                                    "It was the best  <br>
                                    trip I've ever had, <br>
                                    I'd love to do it <br>
                                    all over again"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Medan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection