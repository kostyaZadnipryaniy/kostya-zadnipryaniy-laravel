@extends('layouts.myLayout')
@section('in')
<form action="{{route('Front.store')}}" method="post">
    @csrf
        <input type="text" name="comment" id="comment" placeholder="comment">
        <input type="number" name="value" id="value" placeholder="value">
        <button type="submit">add</button>
    </form>
    <a href="{{route('Front.index')}}">main</a><br>
    <a href="{{route('Front.update')}}">update</a><br>
    @endsection
