@extends('frontend.main-layout')
@section('content')
<section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Menus</h1>
                    <p>Curabitur at dolor sed felis lacinia ultricies sit amet vel sem. Vestibulum diam leo, sodales tempor lectus sed, varius gravida mi.</p>
                </div>
            </div>
        </div>
    </section>
<section class="services mt-4">
        <div class="container" style="margin-top: 40px;">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="{{route('menu')}}">
                        <img src="img/cook_breakfast.png" alt="Breakfast">
                        <h4>Breakfast</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="{{route('menu-lunch')}}">
                        <img src="img/cook_lunch.png" alt="Lunch">
                        <h4>Lunch</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="{{route('menu-dinner')}}">
                        <img src="img/cook_dinner.png" alt="Dinner">
                        <h4>Dinner</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="{{route('menu-desert')}}">
                        <img src="img/cook_dessert.png" alt="Desserts">
                        <h4>Desserts</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> 


    
    @endsection
