
@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Thank You {{ $email }} For Subscribing!</h1>
        <br>
        {{$error}}
        <br>
        {{$succeed}}
        <br>
        {{$sent}}
    </div>

@endsection
