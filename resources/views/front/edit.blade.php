@extends('layouts.myLayout')
@section('in')
<form action="{{route('Front.update', $front->id)}}" method="post">
    @csrf
    @method('patch')
        <input type="text" name="comment" id="comment" placeholder="comment" value="{{$front->comment}}">
        <input type="number" name="value" id="value" placeholder="value" value="{{$front->value}}">
        <button type="submit">update</button>
    </form>
    <a href="{{route('Front.index')}}">main</a><br>
    @endsection
