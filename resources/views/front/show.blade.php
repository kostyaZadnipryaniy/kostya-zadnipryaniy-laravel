@extends('layouts.myLayout')
@section('in')

            <div>{{$front->id}}</div>
            <div>{{$front->value}}</div>
            <div>{{$front->comment}}</div>

    <a href="{{route('Front.index')}}">main</a><br>
    <a href="{{route('Front.create')}}">create</a><br>
    <a href="{{route('Front.edit', $front->id)}}">edit</a><br>
    <form action="{{route('Front.delete', $front->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="delete">
    </form>
    @endsection

