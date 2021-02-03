<?php
use App\Models\Title;
use App\Models\Text;

?>

@extends('layouts.frontend')
@section('title')
{{'LORDFAKTOR.UZ - Marketing Agency'}}
@stop
@section('content')

<div id="my-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel" data-slide-to="1"></li>
        <li data-target="#my-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach($carousels as $key=>$value)
            <div class="item <?=($key==0)?'active':''?>">
                <img src="{{$value->getImage()}}" alt="{{$value->title}}">
                <div class="carousel-caption">
                    <h1>{{$value->title}}</h1>

                    <p style="width: 60%;">{{$value->short}}</p>
                </div>
            </div>
        @endforeach

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Orqaga</span>
    </a>
    <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Oldinga</span>
    </a>
</div>
<!-- #my-carousel-->



<section class="section-content-left-icon">
    <div class="container">
        <div class="row">
            @foreach($services as $key=>$value)
                <div class="col-md-4">
                    <div class="left-icon-wraper">
                        <div class="icon">
                            <i class="{{$value->icon}}"></i>
                        </div>
                        <div class="content">
                            <h2>{{$value->title}}</h2>
                            <p>{{$value->short}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- .container -->
</section>
<!-- /.services-left-icon -->

<section class="featured-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="featured-content-wrapper">
                    <div class="featured-img">
                        <img class="img-responsive" src="{{asset('themes/frontend/img/img-featured-1.png')}}" alt="">
                    </div>
                    <div class="featured-content">
                        <h1>
                            {{Title::getContent('onlayn-ishlashingizni-yaxshilaymiz')}}
                        </h1>
                        <p>
                            {{Text::getContent('uzaro-bogliq-dasturlarsiz-imkonyatlar')}}
                        </p>
                        <button class="btn btn-default btn-lg" data-toggle="modal" data-target="#exampleModal">
                            {{Title::getContent('biz-haqimizda-malumot-oling')}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.featured-box -->

<section class="testimonial">
    <div class="container">
        <div id="testimonialSlider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#testimonialSlider" data-slide-to="0" class="active"></li>
                <li data-target="#testimonialSlider" data-slide-to="1"></li>
                <li data-target="#testimonialSlider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach($comments as $key=>$value)
                    <div class="item <?=($key==0)?'active':''?>">
                        <blockquote>
                            <p>
                                {{$value->comment}}
                            </p>
                            <ul class="user-details">
                                <li class="avatar">
                                    <img src="{{$value->getImage()}}" class="img-responsive" alt="{{$value->name}}" />
                                </li>
                                <li class="name">{{$value->name}}</li>
                                <li class="company">{{$value->position}}</li>
                            </ul>
                        </blockquote>
                    </div>
                @endforeach   
            </div>
        </div>
        <!-- #testimonialSlider -->
    </div>
</section>
<!-- /.testimonial -->

<section class="client-logo ptb-100">
    <div class="container">
        <div class="row">
            @foreach($partners as $key=>$value)
                <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                    <a href="#">
                        <img src="{{$value->getImage()}}" alt="{{$value->title}}">
                    </a>
                </div>
            @endforeach   
        </div>
    </div>
    <!--end of .container -->
</section>
<!-- /.client-logo -->

<section class="case-studies">
    <div class="container">
        <div class="section-title text-center">
            <h1>
                {{Title::getContent('bizning-amaliy-tadqiqotlarimiz')}}
            </h1>
            <p>
                {{Text::getContent('ajoyib-osoyishtalik-bahramand-buling')}}
            </p>
        </div>
        <div class="row">
            @foreach($process as $key=>$value)
                <div class="col-sm-4">
                    <div class="case-studies-content">
                        <img class="img-responsive" src="{{$value->getImage()}}" alt="{{$value->title}}">
                        <h2>{{$value->title}}</h2>
                    </div>
                </div>
            @endforeach   
        </div><!-- /.row -->

    </div><!-- /.container -->
</section>
<!-- /.client-logo -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Operatorga xabar qoldirish!
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['route' => 'bot-send']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">F.I.O :</label>
                        {{Form::text('full_name',null,['class'=>'form-control','placeholder' => 'First Name'])}}
                            @error('full_name')
                                <span class="invalid-feedback" role="alert">
                                    <p class="erros-text">{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Telifon raqam :</label>
                        {{Form::text('phone',null,['class'=>'form-control','placeholder' => 'Phone number'])}}
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <p class="erros-text">{{ $message }}</p>
                            </span>
                        @enderror                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop
<!--  -->

