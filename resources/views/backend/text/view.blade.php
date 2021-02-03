<?
use App\User;
?>
@extends('layouts.backend')
@section('title')
{{'View Text'}}
@stop
@section('content')

<!-- page content -->
<main>
    <div class="container-fluid">
        <h1 class="mt-4">View Text</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('admin-text.index')}}">Texts</a>
            </li>
            <li class="breadcrumb-item active">
                View
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fa fa-eye"></i>
                View Text
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
                                <td>Content</td>
                                <td>{{$text->text}}</td>
                            </tr>
                            <tr>
                                <td>Slug</td>
                                <td>{{$text->slug}}</td>
                            </tr>
                            <tr>
                                <td>User</td>
                                <td>
                                    {{User::name($text->user_id)}}
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