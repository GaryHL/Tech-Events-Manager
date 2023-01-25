@extends('layouts.app')
@section('content')
@section('title', 'Events')
@section('meta-desctiption', 'Events meta')
<h1>Events</h1>
<div>
    @foreach($events as $event)
        <h2><a href="/events/{{ $event->id }}">{{ $event->title }}</a></h2>
    @endforeach
</div>
@endsection