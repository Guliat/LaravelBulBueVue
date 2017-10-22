@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column">
            <div class="box">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                You are logged in!
            </div>
        </div>
    </div>
@endsection
