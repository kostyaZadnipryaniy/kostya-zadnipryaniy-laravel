dd(111);
@extends('layouts.myLayout')
@section('in')

<div style="font-size: 50px;">Your data is validate</div>
    <a href="{{route('Front')}}">store</a><br>
    <a href="{{route('Front.create')}}">create</a><br>
    <a href="{{route('Front.show')}}">show</a><br>
    <a href="{{route('Front.edit')}}">edit</a><br>
    <a href="{{route('Front.update')}}">update</a><br>
    <a href="{{route('Front.destroy')}}">destroy</a><br>
    @endsection

