@extends('layouts.backend')
@section('title')
{{'Create Service'}}
@stop
@section('content')

<!-- page content -->
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Create Service</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{url('admin-service')}}">Services</a>
            </li>
            <li class="breadcrumb-item active">
                Add
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-plus-square"></i>
                Create Service
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {!! Form::open(['route' => 'admin-service.store']) !!}
                    {{ Form::hidden('user_id', $user_id) }}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">
                            Title
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {{Form::text('title',null,['class'=>'form-control','placeholder' => 'Title'])}}
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <p class="erros-text">{{ $message }}</p>
                            </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">
                            Short name
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {{Form::text('short',null,['class'=>'form-control','placeholder' => 'Short name'])}}
                            @error('short')
                            <span class="invalid-feedback" role="alert">
                                <p class="erros-text">{{ $message }}</p>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">
                            Icon class
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {{Form::text('icon',null,['class'=>'form-control','placeholder' => 'Icon'])}}
                            @error('icon')
                            <span class="invalid-feedback" role="alert">
                                <p class="erros-text">{{ $message }}</p>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="ln_solid"></div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-admin">
                                Save
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</main>

<!-- /page content -->

@endsection
