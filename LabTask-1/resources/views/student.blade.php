@extends('layouts.app')

@section('content')

<h1>Student header</h1>
<h4>Course List:</h4>
<ul>
    @foreach($course as $c)
       
    <li>Course 1: {{$c->course1}}</li>
    <li>Course 2: {{$c->course2}}</li>
    <li>Course 3: {{$c->course3}}</li>
    <li>Course 4: {{$c->course4}}</li>
        <br>
    @endforeach
</ul>

<br>
<h2>Student footer</h2>

@endsection