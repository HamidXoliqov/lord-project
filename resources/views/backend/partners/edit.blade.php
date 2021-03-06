@extends('layouts.backend')
@section('title')
{{'Edit Partner'}}
@stop
@section('content')

<!-- page content -->
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edite Partner</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('admin-partners.index')}}">Partners</a>
            </li>
            <li class="breadcrumb-item ">
                <a href="{{route('admin-partners.create')}}">Add</a>
            </li>
            <li class="breadcrumb-item active">
                Edit
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-edit"></i>
                Edit Partner
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {!! Form::open(['route' => ['admin-partners.update',$partner->id],'method'=>'put','files'=>'true']) !!}
                    {{ Form::hidden('user_id', $user_id) }}
                    <div class="row">
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                    Title
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    {{Form::text('title',$partner->name,['class'=>'form-control','placeholder' => 'Title'])}}
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">
                                    Image
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <img src="{{$partner->getImage()}}" class="img-thumbnail">

                                    {{Form::file('image')}}
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                <p class="erros-text">{{ $message }}</p>
                            </span>
                                    @enderror
                                </div>
                            </div>
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
