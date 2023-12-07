@extends('layout.master')
@section('header')
    @include('layout.nav')
@endsection 
@section('main')

<a href="{{route('adminvideo.create')}}">post video</a>
    @foreach ($videos as $item)
    <div class="video-container">
            <iframe width="560" height="315" src="laravel/public/videos/{{$item->video }}" frameborder="0" allowfullscreen></iframe>
    </div>
@endforeach
@endsection