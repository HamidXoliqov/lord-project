<?php
use App\Models\Title;
use App\Models\Text;

?>

@extends('layouts.frontend')
@section('title')
{{'Services'}}
@stop
@section('content')
<section class="single-page-title single-page-title-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{Title::getContent('our-services')}}</h2>
            </div>
        </div>
    </div>
</section>
<!-- .page-title -->


<section class="section-content-left-icon">
    <div class="container">
        <div class="row">
            @foreach($services as $value)
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



<section class="gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 x-accordion">
                <h3>{{Title::getContent('how-we-work')}}</h3>
                <div class="panel-group" id="accordionSixLeft">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordionSixLeft" href="#collapseSixLeftone" aria-expanded="false" class="collapsed">
                                    {{Title::getContent('seamlesslt-wmpower')}}
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSixLeftone" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                {{Text::getContent('ut-cursus-massa')}}
                            </div>
                        </div>
                    </div><!-- /.panel-default -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionSixLeft" href="#collapseSixLeftTwo" aria-expanded="false">
                                    {{Title::getContent('initiatives')}}
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSixLeftTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                {{Text::getContent('ut-cursus-massa-urnaaculis-estie')}}
                            </div>
                        </div>
                    </div><!-- /.panel-default -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="" data-toggle="collapse" data-parent="#accordionSixLeft" href="#collapseSixLeftThree" aria-expanded="true">
                                    {{Title::getContent('objectively-maintain')}}
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSixLeftThree" class="panel-collapse collapse in" aria-expanded="true">
                            <div class="panel-body">
                                {{Text::getContent('ut-cursus-massa-sed-aliquamellus-vitae')}}
                            </div>
                        </div>
                    </div><!-- /.panel-default -->
                </div>
                <!--end of /.panel-group-->
            </div>
            <!-- .x-aacordion-->

            <div class="col-md-6 col-sm-12 tabOne">
                <h3>{{Title::getContent('why-choose-services')}}</h3>
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul id="tabOne" class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a href="#contentOne-1" data-toggle="tab" aria-expanded="true">
                                {{Title::getContent('strategic-plan')}}
                            </a>
                        </li>
                        <li class="">
                            <a href="#contentOne-2" data-toggle="tab" aria-expanded="false">
                                {{Title::getContent('annual-budget-plan')}}
                            </a>
                        </li>
                        <li class="">
                            <a href="#contentOne-3" data-toggle="tab" aria-expanded="false">
                                {{Title::getContent('perofessional-details')}}
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="contentOne-1">
                            <p>
                                {{Text::getContent('mauris-in-quam')}}
                            </p>
                        </div>
                        <div class="tab-pane fade" id="contentOne-2">
                            <p>
                                {{Text::getContent('mauris-in-quam-tristique')}}
                            </p>

                        </div>
                        <div class="tab-pane fade" id="contentOne-3">
                            <p>{{Text::getContent('mauris-in-quam-tristique-dignissim-urna-in')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .about-text-->
@stop