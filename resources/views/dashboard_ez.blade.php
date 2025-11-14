@extends("layouts.layout")

@section("title", "Dashboard Page")

@section("content")

<h2>Hi "{{ auth()->user()->name }}", Welcome to the Dashboard</h2>
<p>This is the body of your dashboard. u can add ur own content here.</p>


@endsection