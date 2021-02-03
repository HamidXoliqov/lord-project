@extends('layouts.backend')
@section('title')
{{'Edit Setting'}}
@stop
@section('content')

<!-- page content -->
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edite Setting</h1>
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
                Edit
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-edit"></i>
                Edit Settings
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {!! Form::open(['route' => ['admin-settings.update',$setting->id],'method'=>'put']) !!}
                    {{ Form::hidden('user_id', $user_id) }}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">
                            Title
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {{Form::text('title',$setting->title,['class'=>'form-control','placeholder' => 'Title'])}}
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <p class="erros-text">{{ $message }}</p>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">
                            Name
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {{Form::text('name',$setting->name,['class'=>'form-control','placeholder' => 'Name'])}}
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <p class="erros-text">{{ $message }}</p>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">
                            Value
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {{Form::text('value',$setting->value,['class'=>'form-control','placeholder' => 'Value'])}}
                            @error('value')
                            <span class="invalid-feedback" role="alert">
                                <p class="erros-text">{{ $message }}</p>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <div class="col-md-12 ">
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