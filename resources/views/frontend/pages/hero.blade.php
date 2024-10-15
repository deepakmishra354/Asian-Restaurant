@extends('frontend.main-layout')
@section('content')
<section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h4>Here you can find delecious foods</h4>
                    <h2>Asian Restaurant</h2>
                    <p>Quisque nec nibh id lacus fringilla eleifend sed sit amet sem. Donec lectus odio, mollis a nisl non, tempor interdum nisl.</p>
                    <div class="primary-button">
                    <a href="#" class="scroll-link" data-id="book-table">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cook-delecious">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <div class="first-image">
                        <img src="img/cook_01.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cook-content">
                        <h4>We cook delecious</h4>
                        <div class="contact-content">
                            <span>You can call us on:</span>
                            <h6>+ 1234 567 8910</h6>
                        </div>
                        <span>or</span>
                        <div class="primary-white-button">
                            <a href="#" class="scroll-link" data-id="book-table">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="second-image">
                        <img src="img/cook_02.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>  
                        <!-- Menu Section  -->
    <section class="services">
        <div class="container">
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

    <section id="book-table">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="heading">
                <h2>Book Your Table Now</h2>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-2 col-sm-12">
            <div class="left-image">
                <img src="img/book_left_image.jpg" alt="">
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="right-info">
                <h4>Reservation</h4>
                <form id="reservation-form" action="/reserve-table" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <select required name="day">
                                    <option value="">Select day</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <select required name="hour">
                                    <option value="">Select hour</option>
                                    <option value="10:00">10:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="22:00">22:00</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Full name" required="">
                            </fieldset> 
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <input name="phone" type="tel" class="form-control" id="phone" placeholder="Phone number" required="">
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <select required class="person" name="persons">
                                    <option value="">How many persons?</option>
                                    <option value="1">1 Person</option>
                                    <option value="2">2 Persons</option>
                                    <option value="3">3 Persons</option>
                                    <option value="4">4 Persons</option>
                                    <option value="5">5 Persons</option>
                                    <option value="6">6 Persons</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <button type="submit" class="btn">Book Table</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
                <div id="toast" style="display:none; position:fixed; bottom:20px; right:20px; background-color:green; color:white; padding:10px; border-radius:5px;">Your table is booked successfully!</div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('reservation-form').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default form submission
        
        const formData = new FormData(this);

        fetch(this.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Laravel CSRF token
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Show success toast
                document.getElementById('toast').style.display = 'block';
                setTimeout(() => {
                    document.getElementById('toast').style.display = 'none';
                }, 1000); // Hide after 3 seconds
                
                // Reset the form fields
                document.getElementById('reservation-form').reset();
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    });
    document.querySelectorAll('.scroll-link').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = this.getAttribute('data-id');
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                // Smooth scrolling to the target element
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>


    </section><section class="get-app">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Get application for your phone</h2>
                </div>
                <div class="primary-white-button">
                    <a href="#">Download now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-food">
    <div class="container">
        <div class="row">
            <div class="heading">
                <h2>Weekly Featured Food</h2>
            </div>
        </div>
        <div class="row ">
            <div id="owl-featured-food" class="owl-carousel owl-theme">
                <a href="{{route('menu')}}">
                    <div class="item">
                        <div class="food-item">
                            <h2>Breakfast</h2>
                            <img src="img/breakfast_item.jpg" alt="" style="width: 100%; height: auto;">
                            <div class="price">$4.50</div>
                            <div class="text-content">
                                <h4>Kale Chips Art Party</h4>
                                <p>Soft, deep-fried milk dumplings soaked in aromatic sugar syrup, garnished with nuts. A classic sweet treat perfect for any occasion....</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('menu-lunch')}}">
                    <div class="item">
                        <div class="food-item">
                            <h2>Lunch</h2>
                            <img src="img/lunch_item.jpg" alt="" style="width: 100%; height: auto;">
                            <div class="price">$7.50</div>
                            <div class="text-content">
                                <h4>Taiyaki Gastro Tousled</h4>
                                <p>Dreamcatcher squid ennui cliche chicharros nes echo small batch jean shorts hexagon street art knausgaard wolf...</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('menu-dinner')}}">
                    <div class="item">
                        <div class="food-item">
                            <h2>Dinner</h2>
                            <img src="img/dinner_item.jpg" alt="" style="width: 100%; height: auto;">
                            <div class="price">$12.50</div>
                            <div class="text-content">
                                <h4>Batch Squid Jean Shorts</h4>
                                <p>Crispy, spiral-shaped sweets made from fermented batter, soaked in sugar syrup, and served hot. A popular street food dessert...</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('menu-desert')}}">
                    <div class="item">
                        <div class="food-item">
                            <h2>Dessert</h2>
                            <img src="img/Des3.jpg" alt="" style="width: 100%; height: auto;">
                            <div class="price">$53.87</div>
                            <div class="text-content">
                                <h4>Ras Malai</h4>
                                <p>Fluffy cottage cheese discs soaked in rich, creamy milk and flavored with cardamom, garnished with pistachios. A refreshing and indulgent dessert....</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="our-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Our blog post</h2>
                </div>
            </div>
        </div>
        <div class="row">
                <a href="{{route('blogs-data')}}">
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/blog_post_01.jpg" alt="">
                        <div class="date">26 Oct 2017</div>
                        <div class="right-content">
                            <h4>Stumptown Tofu Schlitz</h4>
                            <span>Branding / Admin</span>
                            <p>Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
</a>
<a href="{{route('blogs-data')}}">

                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/blog_post_02.jpg" alt="">
                        <div class="date">21 Oct 2017</div>
                        <div class="right-content">
                            <h4>Succulents Hashtag Folk</h4>
                            <span>Branding / Admin</span>
                            <p>Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
</a>
<a href="{{route('blogs-data')}}">

                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/blog_post_03.jpg" alt="">
                        <div class="date">11 Oct 2017</div>
                        <div class="right-content">
                            <h4>Knaus Sriracha Pinterest</h4>
                            <span>Dessert / Chef</span>
                            <p>Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
</a>
<a href="{{route('blogs-data')}}">

                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/blog_post_04.jpg" alt="">
                        <div class="date">03 Oct 2017</div>
                        <div class="right-content">
                            <h4>Crucifix Selvage Coat</h4>
                            <span>Plate / Chef</span>
                            <p>Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</a>

    </section>

<!-- Pagination should be outside of the loop -->



<!-- Include jQuery and Owl Carousel scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function(){
        var owl = $('#owl-featured-food');
        owl.owlCarousel({
            items: 3,
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