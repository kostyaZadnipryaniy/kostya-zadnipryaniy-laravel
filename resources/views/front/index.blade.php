@extends('layouts.myLayout')
@section('in')
    <table class="col-sm-4">
    @foreach($front as $unit)
    <tr>
    <td>{{$unit->id}}</td>
    <td>{{$unit->comment}}</td>
    <td>{{$unit->value}}</td>
    </tr>
    @endforeach
    </table>
    <a href="{{route('Front.create')}}">create</a><br>
    <a href="{{route('Front.store')}}">store</a><br>
    <a href="{{route('Front.show')}}">show</a><br>
    <a href="{{route('Front.edit')}}">edit</a><br>
    <a href="{{route('Front.update')}}">update</a><br>
    <a href="{{route('Front.destroy')}}">destroy</a><br>
    @endsection

