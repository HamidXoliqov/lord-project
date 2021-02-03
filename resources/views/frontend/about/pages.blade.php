<?php
use App\Models\Title;
use App\Models\Text;

?>

@extends('layouts.frontend')
@section('title')
    {{'About us'}}
@stop
@section('content')

<section class="single-page-title single-page-title-about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>
                    {{Title::getContent('about-us')}}
                </h2>
            </div>
        </div>
    </div>
</section>
<!-- .page-title -->

<section class="about-text">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>
                {{Title::getContent('we-help-you')}}
            </h2>
        </div>
    </div>
        <div class="row">
            <div class="col-md-6">
                <p>
                    {{Text::getContent('appropriately-benchmark-bricks-and-clicks')}}
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    {{Text::getContent('completely-pontificate-timely-metrics')}}
                </p>
            </div>
        </div>
    </div>

</section>
<!-- .about-text-->

<section class="about-text-2">
    <div class="container">
        <div class="row">
            @foreach($abouts as $value)
                <div class="col-sm-4">
                    <h3>{{$value->title}}</h3>
                    <img src="{{$value->getImage()}}" alt="{{$value->title}}">
                    <p>{{$value->short}}</p>
                </div>
            @endforeach
        </div>
    </div>

</section>
<!-- .skills -->

<section class="team-section">
        <div class="container">
            <div class="section-title text-center">
                <h2>
                    {{Title::getContent('meet-the-team')}}
                </h2>
            </div>
        </div>   
        <div class="team-member">
            <div class="container">
                <div class="row">
                @foreach($teams as $value)
                    <div class="col-sm-4">
                        <figure class="thumbnail">
                            <a href="#">
                                <img src="{{$value->getImage()}}" class="img-responsive" alt="Image">
                            </a>
                            <figcaption class="caption text-center">
                                <h3>{{$value->name}}</h3>
                                <p>{{$value->title}}</p>
                                <hr>
                                <ul class="social-links">
                                    <li>
                                        <a href="{{$value->facebook}}" target="_blank facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$value->twitter}}" target="_blank twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$value->in}}" target="_blank in"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    @endforeach
                </div><!-- .row -->
            </div> <!-- .container -->
        </div>
</section><!--.team-section-->
@stop



