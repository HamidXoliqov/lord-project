<?
use App\User;
?>
@extends('layouts.backend')
@section('title')
{{'Feedbacks'}}
@stop
@section('content')

<!-- page content -->
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Settings</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                Feedbacks
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>DataTable Feedbacks
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="10px">№</th>
                                <th>Full name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th width="10%">Actions</th>
                            </tr>
                        </thead>
                        @if (count($feedbacks)>0)
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($feedbacks as $value)
                            <tr>
                                <td>@php echo $i++ @endphp</td>
                                <td>{{$value->full_name}}</td>
                                <td>{{$value->phone}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{($value->status==0)?'new':'old'}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{route('admin-feedback.show',$value->id)}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @else
                        <div class="page-not">
                            <p align="center">
                                Bu bo'limda hali ma'lumot saqlanmagan !!!
                            </p>
                        </div>
                        @endif
                    </table>
                </div>
            </div>
            <div class="pagination-admin">
                {{$feedbacks->links()}}
            </div>
        </div>
    </div>
</main>
<!-- /page content -->

@endsection