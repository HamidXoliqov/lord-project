<?
use App\User;
?>
@extends('layouts.backend')
@section('title')
{{'View Comment'}}
@stop
@section('content')

<!-- page content -->
<main>
    <div class="container-fluid">
        <h1 class="mt-4">View Comment</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('admin-comment.index')}}">Comments</a>
            </li>
            <li class="breadcrumb-item ">
                <a href="{{route('admin-comment.create')}}">Add</a>
            </li>
            <li class="breadcrumb-item active">
                View
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fa fa-eye"></i>
                View Comment
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
                                <td><img src="{{$comment->getImage()}}" class="img-thumbnail"></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{$comment->name}}</td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td>{{$comment->position}}</td>
                            </tr>
                            <tr>
                                <td>Comment</td>
                                <td>{{$comment->comment}}</td>
                            </tr>
                            <tr>
                                <td>User</td>
                                <td>
                                    {{User::name($comment->user_id)}}
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
