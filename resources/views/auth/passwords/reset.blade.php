@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="panel panel-body login-form">
            <div class="text-center">
                <div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
                <h5 class="content-group">Password Reset <small class="display-block">Reset your passwords</small></h5>
            </div>

            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" placeholder="E-Mail Address" name="email" value="{{ $email or old('email') }}" required autofocus>
                <div class="form-control-feedback">
                    <i class="icon-mail5 text-muted"></i>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback has-feedback-left {{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Create password" name="password" required>
                <div class="form-control-feedback">
                    <i class="icon-user-lock text-muted"></i>
                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback has-feedback-left {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                <div class="form-control-feedback">
                    <i class="icon-user-lock text-muted"></i>
                </div>
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>

            <button type="submit" class="btn bg-blue btn-block">Reset password <i class="icon-arrow-right14 position-right"></i></button>
        </div>
    </form>

@endsection
