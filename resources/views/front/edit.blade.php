@extends('layouts.myLayout')
@section('in')
<form action="{{route('Front.update', $front->id)}}" method="post">
    @csrf
    @method('patch')
        <input type="number" name="id" id="id" placeholder="id">
        <input type="text" name="comment" id="comment" placeholder="comment">
        <input type="number" name="value" id="value" placeholder="value">
        <button type="submit">update</button>
    </form>
    <a href="{{route('Front.index')}}">main</a><br>
    <a href="{{route('Front.destroy')}}">destroy</a><br>
    @endsection
