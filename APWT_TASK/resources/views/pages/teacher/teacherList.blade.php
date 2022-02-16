@extends('layouts.app')
@section('content')
    <table class="table table-border">
        <tr>
            <tr>
                <th>Name</th>
                <th>Phone</th>
    
            </tr>
            @foreach($teachers as $teacher)
            <tr>
                <td><a href="/teacher/courses/{{$teacher->id}}">{{$teacher->name}}</a></td>
                <td>{{$teacher->phone}}</td>
    
            </tr>
            @endforeach
            
        </table>
    @endsection