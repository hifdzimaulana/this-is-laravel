@extends('layouts.main')

@section('page-title')
    Articles
@endsection

@section('title')
    Kabar terbaru hari ini
@endsection

@section('content')
    @foreach ($articles as $item)
        <h3>{{ $item['title'] }}</h3>
        <img src="{{ $item['img_url'] }}" alt="{{ $item['title'] }}">
        <p>{{ $item['content'] }}</p>
    @endforeach
@endsection
