@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-light">All Student</div>
            <a href="{{route('student.create')}}" class="btn btn-dark">Create Student</a>

                <div class="card-body">
                    <table class="table">
                        <thead class="bg-primary">
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">Email</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($students  as $student)
                          <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>@mdo</td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
