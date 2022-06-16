@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center font-weight-bold">{{ __('Welcome to Contact App,') }} <i>{{  auth()->user()->name  }}</i> !</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Made by: John Oliver F. Santiago III-BSIT-D') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
