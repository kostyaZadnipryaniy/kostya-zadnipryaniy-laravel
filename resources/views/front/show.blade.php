@extends('layouts.myLayout')
@section('in')

            <div>{{$front->id}}</div>
            <div>{{$front->value}}</div>
            <div>{{$front->comment}}</div>

    <a href="{{route('Front.index')}}">main</a><br>
    <a href="{{route('Front.create')}}">create</a><br>
    <a href="{{route('Front.destroy')}}">destroy</a><br>
    @endsection

