@extends('layouts.backend')
@section('title')
{{'Create title'}}
@stop
@section('content')

<!-- page content -->
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Create Title</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{url('admin-title')}}">Titles</a>
            </li>
            <li class="breadcrumb-item active">
                Add
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-plus-square"></i>
                Create Title
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {!! Form::open(['route' => 'admin-title.store']) !!}
                    {{ Form::hidden('user_id', $user_id) }}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">
                            Content
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {{Form::text('title',null,['class'=>'form-control','placeholder' => 'Content'])}}
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <p class="erros-text">{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">
                            Slug
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {{Form::text('slug',null,['class'=>'form-control','placeholder' => 'Slug'])}}
                            @error('slug')
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