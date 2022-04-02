@extends('layouts.myLayout')
@section('in')
<form action="{{route('Front.store')}}" method="post">
    @csrf
        <input type="text" name="comment" id="comment" placeholder="comment">
        <input type="number" name="value" id="value" placeholder="value">
        <label for="category">category</label>
        <select name="category" id="category">
            @foreach($categories as $unit)
            <option value="category_id">{{$unit->data}}</option>
            @endforeach
        </select>
        <button type="submit">add</button>
    </form>
    <a href="{{route('Front.index')}}">main</a><br>
    @endsection
