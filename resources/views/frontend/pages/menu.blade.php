@extends('frontend.main-layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="breakfast-menu-content">
                <div class="row">
                    <div class="col-md-5">
                        <div class="left-image">
                            <img src="img/breakfast_menu.jpg" alt="Breakfast">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h2>Breakfast Menu</h2>
                        <div id="owl-breakfast" class="owl-carousel owl-theme">
                            @foreach ($data as $key => $record)
                                <div class="item col-md-12">
                                    <div class="food-item">
                                        <img src="{{ asset('Breakfast/' . $record->menu_image) }}" alt="Not Found">
                                        <div class="price">{{$record->menu_price}}</div>
                                        <div class="text-content">
                                            <h4>{{$record->menu_title}}</h4>
                                            <p>{{$record->menu_description}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        var owl = $('#owl-breakfast');
        owl.owlCarousel({
            items: 1, // aapko ek samay mein 1 item dikhana hai
            loop: true,
            margin: 10,
            nav: false, // isse humne buttons ko toggle kiya hai
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });
        
        // Custom navigation buttons
        $('.owl-prev').click(function() {
            owl.trigger('prev.owl.carousel');
        });
        
        $('.owl-next').click(function() {
            owl.trigger('next.owl.carousel');
        });
    });
</script>
@endsection
