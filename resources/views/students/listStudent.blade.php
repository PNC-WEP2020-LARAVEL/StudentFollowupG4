@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-stripe text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Class</th>
                            <th>Year</th>
                            <th>Picture</th>
                            <th>Province</th>
                            <th>Status</th>
                            <th>Action</th>
                            {{-- @if (Auth::check())


                            @endif --}}
                        </tr>
                    </thead>
                    @foreach ($students as $student)
                        <tbody>
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->firstName}}</td>
                                <td>{{$student->lastName}}</td>
                                <td>{{$student->gender}}</td>
                                <td>{{$student->class}}</td>
                                <td>{{$student->year}}</td>
                                <td>{{$student->picture}}</td>
                                <td>{{$student->province}}</td>
                                <td>{{$student->status}}</td>
                                <td>
                                    <a href="{{route('student.create')}}">Follow Up</a> ||
                                    <a href="">Comments</a>
                                </td>
                                {{-- @auth
                                @endauth --}}
                                
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection