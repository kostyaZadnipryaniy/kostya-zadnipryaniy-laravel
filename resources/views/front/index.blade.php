@extends('layouts.myLayout')
@section('in')
<div>
    <table class="col-sm-4">
        @foreach($front as $unit)
        <tr>
            <td><a href="{{route('Front.show', $unit->id)}}">{{$unit->id}}</a></td>
            <td>{{$unit->comment}}</td>
            <td>{{$unit->value}}</td>
        </tr>
        @endforeach
    </table>
</div>
    <a href="{{route('Front.create')}}">create</a><br>
    <a href="{{route('Front.destroy')}}">destroy</a><br>
    @endsection

