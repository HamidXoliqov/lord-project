<?
use App\User;
?>
@extends('layouts.backend')
@section('title')
{{'View Process'}}
@stop
@section('content')

<!-- page content -->
<main>
    <div class="container-fluid">
        <h1 class="mt-4">View Process</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('admin-process.index')}}">Process</a>
            </li>
            <li class="breadcrumb-item ">
                <a href="{{route('admin-process.create')}}">Add</a>
            </li>
            <li class="breadcrumb-item active">
                View
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fa fa-eye"></i>
                View Process
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
                                <td>Image</td>
                                <td><img src="{{$process->getImage()}}" class="img-thumbnail"></td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>{{$process->title}}</td>
                            </tr>
                            <tr>
                                <td>Short name</td>
                                <td>{{$process->short}}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{$process->text}}</td>
                            </tr>
                            <tr>
                                <td>User</td>
                                <td>
                                    {{User::name($process->user_id)}}
                                </td>
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
