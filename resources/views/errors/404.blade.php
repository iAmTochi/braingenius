@extends('errors.error_layout')

@section('title','404 - Page Not Found')

@section('content')
    <div class="error-box">
        <div class="error-body text-center">
            <h1 class="error-title text-danger">404</h1>
            <h3 class="text-uppercase error-subtitle">PAGE NOT FOUND !</h3>
            <p class="text-muted mt-4 mb-4">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
            <a href="{{ route('home') }}" class="btn btn-danger btn-rounded waves-effect waves-light mb-5">Back to home</a> </div>
    </div>

@endsection
