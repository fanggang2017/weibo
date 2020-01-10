@extends('layouts.default')
@section('title', 'Reset Password')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>Reset Password</h5>
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                    <form action="{{ route('password.email') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="form-control-label">Email Address:</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="form-text">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Send Email</button>

                    </form>

            </div>
        </div>
    </div>
@stop
