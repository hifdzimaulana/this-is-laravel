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
            'img_url' => $item['img_url'],
            'content' => $item['content'],
        ])
    @endforeach
@endsection
