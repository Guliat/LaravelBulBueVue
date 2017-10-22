@extends('layouts.app')

@section('content')
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card">
            <div class="card-content">
                <div class="has-text-centered">
                    <span class="subtitle is-3">New Account</span>
                </div>
                <hr>
                <form action="{{ route('register') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="field">
                        <label for="name" class="label">Name</label>
                        <p class="control">
                            <input id="name" type="text" class="input {{ $errors->has('name') ? ' has-error' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        </p>
                        @if ($errors->has('name'))
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="email" class="label">E-Mail Address</label>
                        <p class="control">
                            <input id="email" type="email" class="input {{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}" required>
                        </p>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password</label>
                            <p class="control">
                                <input id="password" type="password" class="input {{ $errors->has('password') ? ' has-error' : '' }}" name="password" required>
                            </p>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="field">
                        <label for="password-confirm" class="label">Confirm Password</label>
                        <p class="control">
                            <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                        </p>
                    </div>
                    <button class="button is-primary is-outlined is-fullwidth m-t-30">Register Me</button>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection
