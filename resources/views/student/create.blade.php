@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(Session::has('success'))
                <div class="alart alert-success"></div>
                @endif
                <div class="card-header bg-success text-light">Create Student</div>
                <a href="{{route('student.index')}}" class="btn btn-dark">All Student</a>

                <div class="card-body">

                    <form action="{{route('student.store')}}" method="POST">

                        @csrf
                        <div class="form-group col-6 offset-3">
                          <label for="exampleInputEmail1">Student Name</label>
                          <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Student Name" name="name">
                        </div>
                        <div class="form-group col-6 offset-3">
                            <label for="exampleInputEmail1">Student Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Student Email" name="email">
                          </div>
                        <button type="submit" class="btn btn-primary col-6 offset-3">Submit</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
