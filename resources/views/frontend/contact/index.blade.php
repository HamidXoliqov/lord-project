<?php
use App\Models\Title;
use App\Models\Text;
use App\Models\Settings;

?>

@extends('layouts.frontend')
@section('title')
{{ 'Contact' }}
@stop
@section('content')
<section class="single-page-title single-page-title-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{Title::getContent('contact-us')}}</h2>
            </div>
        </div>
    </div>
</section>
<!-- .page-title -->
<!-- .page-title -->

<section class="our-location">
    <div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.4414092103502!2d69.2535549154237!3d41.321013979270376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b12d68f1617%3A0xa9aa594f3dac0356!2zMjU2LCAxNTMgTmF2b2l5IHNob2gga28nY2hhc2ksINCi0L7RiNC60LXQvdGC!5e0!3m2!1sru!2s!4v1575123918313!5m2!1sru!2s" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</section>



<section class="contact-detail gray-bg">
    <div class="container text-left">
        <div class="row">
            <div class="col-md-4">
                <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon promo-icon-blue">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="promo-content">
                        <h3>{{Title::getContent('office-address')}}</h3>
                        <address>
                            <?=Settings::getValue('office_address');?>
                        </address>
                    </div>
                </div><!-- /.promo-block-wrapper -->
            </div>

            <div class="col-md-4">
                <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon promo-icon-yellow">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="promo-content">
                        <h3>{{Title::getContent('phone-number')}}</h3>
                        <address>
                            <abbr title="Phone">{{Title::getContent('land')}}:</abbr> 
                                <?=Settings::getValue('operator_phone');?>
                            <abbr title="Phone">{{Title::getContent('cell')}}:</abbr> 
                                <?=Settings::getValue('office_phone');?>
                        </address>
                    </div>
                </div><!-- /.promo-block-wrapper -->
            </div>

            <div class="col-md-4">
                <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon promo-icon-green">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="promo-content">
                        <h3>{{Title::getContent('email-address')}}</h3>
                        <address>
                            <a href="mailto:#">
                                <?=Settings::getValue('operator_email');?>
                            </a>
                            <a href="#">
                                <?=Settings::getValue('office_email');?>
                            </a>
                        </address>
                    </div>
                </div><!-- /.promo-block-wrapper -->
            </div>
        </div><!-- /.row -->
    </div>
</section> <!-- contact-detail -->



<section class="contact-section">
    <div class="container">
        <div class="section-title text-center">
            <h2>
                {{Title::getContent('if-you-have-any')}}
            </h2>
        </div>

        <div class="contact-form mt-50">
            {!! Form::open(['route' => 'admin-feedback.store']) !!}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nameTwo" class="sr-only">First/Last Name</label>
                            {{Form::text('full_name',null,['class'=>'form-control','placeholder' => 'First Name'])}}
                            @error('full_name')
                                <span class="invalid-feedback" role="alert">
                                    <p class="erros-text">{{ $message }}</p>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="emailTwo" class="sr-only">Email</label>
                            {{Form::text('email',null,['class'=>'form-control','placeholder' => 'Email Address'])}}
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <p class="erros-text">{{ $message }}</p>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="emailTwo" class="sr-only">Phone number</label>
                            {{Form::text('phone',null,['class'=>'form-control','placeholder' => 'Phone number'])}}
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <p class="erros-text">{{ $message }}</p>
                                </span>
                            @enderror                        
                        </div>
                    </div> <!-- col-md-4 -->

                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="messageTwo" class="sr-only">Message</label>
                            {{Form::textarea('text',null,['class'=>'form-control','rows'=>'7','placeholder' => 'Text'])}}
                            @error('text')
                                <span class="invalid-feedback" role="alert">
                                    <p class="erros-text">{{ $message }}</p>
                                </span>
                            @enderror      
                        </div>
                    </div> <!-- col-md-8 -->
                </div><!-- /.row-->

                <button type="submit" class="btn btn-primary btn-lg pull-right">
                    {{Title::getContent('send-message')}}
                </button>
            {!! Form::close() !!}

        </div> <!-- contact-form -->
    </div>
</section> <!-- contact-section -->
@stop