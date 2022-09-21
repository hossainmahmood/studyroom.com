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
        <div class="card-header">Add Teacher</div>
        <div class="card-body ">
            <form class="offset-3 " method="POST" action="{{ url('videos') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Title </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control " id="name" placeholder="Video Title" name="name"
                            required></input>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sex" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="sex" placeholder="Youtube Link" name="sex"
                            required></input>
                    </div>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    @endsection



