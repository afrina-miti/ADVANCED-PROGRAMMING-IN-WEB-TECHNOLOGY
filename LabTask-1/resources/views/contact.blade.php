@extends('layouts.app')

@section('content')
<ul>
    @foreach($contact as $c)
       
    <li> {{$c->name}}</li>
        <li> {{$c->position}}</li>
        <li> {{$c->email}}</li>
       <br>
    @endforeach
</ul>


@endsection