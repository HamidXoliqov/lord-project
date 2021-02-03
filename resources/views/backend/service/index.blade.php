<?
use App\User;
?>
@extends('layouts.backend')
@section('title')
{{'Service'}}
@stop
@section('content')

<!-- page content -->
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Services</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                Services
            </li>
            <li class="breadcrumb-item ">
                <a href="{{route('admin-service.create')}}">Add</a>
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>DataTable Services
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="10px">№</th>
                                <th width="10%">Icon</th>
                                <th>Title</th>
                                <th>Short</th>
                                <th width="10%">User</th>
                                <th width="20%">Actions</th>
                            </tr>
                        </thead>
                        @if (count($services)>0)
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($services as $value)
                            <tr>
                                <td>@php echo $i++ @endphp</td>
                                <td>
                                    <div class="icon">
                                        <i class="{{$value->icon}}"></i>
                                    </div>
                                </td>
                                <td>{{$value->title}}</td>
                                <td>{{$value->short}}</td>
                                <td>{{User::name($value->user_id)}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{route('admin-service.show',$value->id)}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning" href="{{route('admin-service.edit',$value->id)}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <div style="display: inline-table;">
                                        {!! Form::open(['route' => ['admin-service.destroy',$value->id],'method'=>'DELETE']) !!}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                        {!! Form::close() !!}
                                    </div>
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
                {{$services->links()}}
            </div>
        </div>
    </div>
</main>
<!-- /page content -->

@endsection