<?
use App\User;
?>
@extends('layouts.backend')
@section('title')
{{'View Feedback'}}
@stop
@section('content')

<!-- page content -->
<main>
    <div class="container-fluid">
        <h1 class="mt-4">View Feedback</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('admin-feedback.index')}}">Feedbacks</a>
            </li>
            <li class="breadcrumb-item active">
                View
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fa fa-eye"></i>
                View Feedback
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="10px">Name</th>
                                <th width="100px">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Full name</td>
                                <td>{{$feedback->full_name}}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{$feedback->phone}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{$feedback->email}}</td>
                            </tr>
                            <tr>
                                <td>Text</td>
                                <td>{{$feedback->text}}</td>
                            </tr>
                            
                            <tr>
                                <td>Status</td>
                                <td>{{$feedback->status==0?'new':'old'}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- /page content -->

@endsection