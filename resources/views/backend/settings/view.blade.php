<?
use App\User;
?>
@extends('layouts.backend')
@section('title')
{{'View Setting'}}
@stop
@section('content')

<!-- page content -->
<main>
    <div class="container-fluid">
        <h1 class="mt-4">View Setting</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('admin-settings.index')}}">Settings</a>
            </li>
            <li class="breadcrumb-item ">
                <a href="{{route('admin-settings.create')}}">Add</a>
            </li>
            <li class="breadcrumb-item active">
                View
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fa fa-eye"></i>
                View Setting
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
                                <td>Title</td>
                                <td>{{$setting->title}}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{$setting->name}}</td>
                            </tr>
                            <tr>
                                <td>Value</td>
                                <td>{{$setting->value}}</td>
                            </tr>
                            <tr>
                                <td>User</td>
                                <td>
                                    {{User::name($setting->user_id)}}
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