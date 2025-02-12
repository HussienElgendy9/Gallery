@extends('admin.layouts.layout')
@section('title')
    Add Slug
@endsection
@section('slugs_status')
    active
@endsection
@section('content')
    <h1 class="display-2 mb-5 text-center">Add New Slug</h1>
    <div class="container bg-light">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        @if(session()->has('failed'))
            <div class="alert alert-danger">
                {{session('failed')}}
            </div>
        @endif
        <form action="{{route('admin.slugs.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter Slug Title">
            </div>
            <input class="btn btn-dark" type="submit" value="Add Slug">
        </form>
    </div>
@endsection
@section('scripts')
@endsection
