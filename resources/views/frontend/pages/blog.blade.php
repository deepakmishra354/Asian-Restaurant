@extends('frontend.main-layout')
@section('content')
<section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Blog</h1>
                    <p>Whatever drinking vinegar hella fingerstache shoreditch kickstarter kitsch. La croix hella iceland flexitarian letterpress.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-page">
    @foreach ($data as $key => $record )
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-item">
                        <img src="{{ asset('Blog/' . $record->blog_image) }}" alt="Not Found">
                        <div class="down-content">
                            <h4>{{$record->blog_title}}</h4>
                            <span>{{$record->blog_header}}</span>
                            <p>{{$record->blog_description}}</p>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
              
                <div class="col-md-8 col-md-offset-2">
                <div style="width: 100%; text-align: center;">
    <ul style="list-style: none; padding: 0;">
        {{$data->links()}}
    </ul>
</div>

                </div>
            </div>
        </div>
    </section>
    @endsection