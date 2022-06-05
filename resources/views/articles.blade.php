@extends('layouts.main')

@section('page-title')
    Articles
@endsection

@section('title')
    Kabar terbaru hari ini
@endsection

@section('content')
    @foreach ($articles as $item)
        @include('partials.article', [
            'title' => $item['title'],
            'url' => $item['url'],
            'img_url' => $item['urlToImage'],
            'content' => $item['description'],
        ])
    @endforeach
@endsection
