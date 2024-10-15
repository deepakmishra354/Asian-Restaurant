@extends('frontend.main-layout')
@section('content')

<section class="lunch-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="lunch-menu-content">
                    <div class="row">
                        <!-- Left Side Image -->
                        <div class="col-md-5">
                            <div class="left-image">
                                <img src="img/Des3.jpg   " alt="Desserts" class="img-responsive" style="max-width: 100%; height: 510px; object-fit: cover; border-radius: 10px;">
                            </div>
                        </div>

                        <!-- Right Side Menu -->
                        <div class="col-md-7">
                            <h2>Desert Menu</h2>
                            <div id="owl-breakfast" class="owl-carousel owl-theme">
                                @foreach ($data as $key => $record)
                                    <div class="item">
                                        <div class="food-item" style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px; border-radius: 8px;">
                                            <img src="{{ asset('Desert/' . $record->menu_image) }}" alt="Not Found" class="img-responsive" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px;">
                                            <div class="price" style="font-size: 18px; font-weight: bold; margin-top: 10px;">{{$record->menu_price}}</div>
                                            <div class="text-content" style="margin-top: 10px;">
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
</section>

<script>
    $(document).ready(function(){
        var owl = $('#owl-breakfast');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 500,
            autoplayHoverPause: true
        });

        // Custom navigation buttons (optional)
        $('.owl-prev').click(function() {
            owl.trigger('prev.owl.carousel');
        });
        
        $('.owl-next').click(function() {
            owl.trigger('next.owl.carousel');
        });
    });
</script>

@endsection
