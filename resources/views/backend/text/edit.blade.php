@extends('layouts.backend')
@section('title')
{{'Edit Text'}}
@stop
@section('content')

<!-- page content -->
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edite Text</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('admin-text.index')}}">Texts</a>
            </li>
            <li class="breadcrumb-item active">
                Edit
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-edit"></i>
                Edit Text
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {!! Form::open(['route' => ['admin-text.update',$text->id],'method'=>'put']) !!}
                    {{ Form::hidden('user_id', $user_id) }}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">
                            Content
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {{Form::textarea('text',$text->text,['class'=>'form-control','placeholder' => 'Title'])}}
                            @error('text')
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
                            {{Form::text('slug',$text->slug,['class'=>'form-control','placeholder' => 'Slug','disabled'])}}
                            @error('slug')
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