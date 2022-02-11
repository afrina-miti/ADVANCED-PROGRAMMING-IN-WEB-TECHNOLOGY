@extends('layouts.app')

@section('content')
<h1>Course Details</h1> 
<ul>
    @foreach($course as $c)
       
    <li>Course: {{$c->course}}</li>
        <li>Instructor: {{$c->instructor}}</li>
        <li>Duration: {{$c->duration}}</li>
        <li>Starts: {{$c->starts}}</li>
        <br>
    @endforeach
</ul>

@endsection