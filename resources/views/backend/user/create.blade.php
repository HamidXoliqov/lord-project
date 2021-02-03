@extends('layouts.backend')
@section('title')
    {{'Create User'}}
@stop
@section('content')

    <!-- page content -->
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Create User</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">
                        <a href="{{route('dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{url('admin-users')}}">Users</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Add
                    </li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-plus-square"></i>
                        Create User
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            {!! Form::open(['route' => 'admin-users.store','files'=>'true']) !!}
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                            User name
                                        </label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            {{Form::text('name',null,['class'=>'form-control','placeholder' => 'User name'])}}
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <p class="erros-text">{{ $message }}</p>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                            Email
                                        </label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            {{Form::text('email',null,['class'=>'form-control','placeholder' => 'Email'])}}
                                         @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <p class="erros-text">{{ $errors->first('email') }}</p>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                            Password
                                        </label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            {{Form::password('password',['class'=>'form-control','placeholder' => 'Password'])}}
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <p class="erros-text">{{ $errors->first('password') }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                            Confirmation password
                                        </label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            {{Form::password('password_confirmation',['class'=>'form-control','placeholder' => 'Confirmation password'])}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-12 col-sm-12 col-xs-12">
                                            Role
                                        </label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            {{Form::select('role', $role, null, ['placeholder' => 'Default','class'=>'form-control'])}}
                                        </div>
                                    </div>
                                </div>
                            <div class="ln_solid"></div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn btn-primary btn-create">
                                    Save
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </main>

    <!-- /page content -->

@endsection


