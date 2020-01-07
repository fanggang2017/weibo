@extends('layouts.default')
@section('title', 'Edit User Info')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>Edit User Info</h5>
            </div>
            <div class="card-body">
                @include('shared._errors')

                <div class="gravatar_edit">
                    <a href="http://gravatar.com/emails" target="_blank">
                        <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar"/>
                    </a>
                </div>

                <form action="{{ route('users.update', $user->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="" class="form-control" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="" class="form-control" value="{{ $user->email }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="" class="form-control" value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password:</label>
                        <input type="password" name="password_confirmation" id="" class="form-control" value="{{ old('password_confirmation') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@stop
