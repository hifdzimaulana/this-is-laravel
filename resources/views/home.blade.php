@extends('layouts.main')

@section('page-title')
    Home
@endsection

@section('title')
    Home Page
@endsection

@section('content')
    <p>ini adalah variable <span id="greeting">greeting</span> </p>
    <p> {{ $greeting }}</p>
@endsection
