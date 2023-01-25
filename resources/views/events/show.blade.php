@extends('layouts.app')
@section('content')
@section('title', '{{ $event->title }}')
@section('meta-desctiption', '{{ $event->description }}')
<h1>{{ $event->title }}</h1>
<p>{{ $event->description }}</p>
<p>{{ $event->date }}</p>
<a href="/events">Back</a>
@endsection
