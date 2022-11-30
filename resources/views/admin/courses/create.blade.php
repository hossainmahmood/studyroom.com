@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- <x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Add Teacher') }}
</h2>
</x-slot> --}}
    <div class="card">
        <div class="card-header">Add Course</div>
        <div class="card-body ">
            <form class="offset-3 " method="POST" action="{{ url('courses') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Course Name </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control " id="name" placeholder="Courses Name"
                            name="coursename" required></input>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="category" name="category">
                            @foreach ($data as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="duration" class="col-sm-2 col-form-label">Course Duration </label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control " id="duration" placeholder="Duration" name="duration"
                            required></input>
                    </div>
                    <span class="col-sm-2">
                            <select class="form-control"  name="durationslot">
                                <option>Day</option>
                                <option>Month</option>
                                <option>Year</option>
                            </select>
                    </span>
                </div>

                <div class="form-group row">
                    <label for="startdate" class="col-sm-2 col-form-label">Start Date</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="startdate" placeholder="Start Date"
                            name="startdate"></input>
                    </div>
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
    @endsection
