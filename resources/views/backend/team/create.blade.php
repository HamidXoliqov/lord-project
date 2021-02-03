@extends('layouts.backend')
@section('title')
{{'Create Team'}}
@stop
@section('content')

<!-- page content -->
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Create Setting</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{url('admin-team')}}">Teams</a>
            </li>
            <li class="breadcrumb-item active">
                Add
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-plus-square"></i>
                Create Team
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {!! Form::open(['route' => 'admin-team.store','files'=>'true']) !!}
                    {{ Form::hidden('user_id', $user_id) }}
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">
                                    Name
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    {{Form::text('name',null,['class'=>'form-control','placeholder' => 'Name'])}}
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="erros-text">{{ $message }}</p>
                                    </span>
                                    @enderror
                                </div>
                            </div>

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
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                    Facebook url
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    {{Form::text('facebook',null,['class'=>'form-control','placeholder' => 'Facebook'])}}
                                    @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="erros-text">{{ $message }}</p>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                    Twitter url
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    {{Form::text('twitter',null,['class'=>'form-control','placeholder' => 'Twitter'])}}
                                    @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="erros-text">{{ $message }}</p>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                    LinkedIn url
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    {{Form::text('in',null,['class'=>'form-control','placeholder' => 'LinkedIn'])}}
                                    @error('in')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="erros-text">{{ $message }}</p>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">
                            Image
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {{Form::file('image')}}
                            @error('image')
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