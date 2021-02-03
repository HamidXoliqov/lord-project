@extends('layouts.backend')
@section('title')
{{'Create Comment'}}
@stop
@section('content')

<!-- page content -->
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Create Comment</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{url('admin-comment')}}">Comments</a>
            </li>
            <li class="breadcrumb-item active">
                Add
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-plus-square"></i>
                Create Comment
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {!! Form::open(['route' => 'admin-comment.store','files'=>'true']) !!}
                    {{ Form::hidden('user_id', $user_id) }}
                    <div class="row">
                        <div class="col-md-9 col-sm-9 col-xs-9">
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
                                    Position
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    {{Form::text('position',null,['class'=>'form-control','placeholder' => 'Position'])}}
                                    @error('position')
                                    <span class="invalid-feedback" role="alert">
                                    <p class="erros-text">{{ $message }}</p>
                                </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">
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
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                    Comment
                                </label>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    {{Form::textarea('comment',null,['class'=>'form-control','placeholder' => 'Comment text'])}}
                                    @error('comment')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="erros-text">{{ $message }}</p>
                                    </span>
                                    @enderror
                                </div>
                            </div>
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
