@extends('layouts.app')

@section('title', 'Create Skill')

@section('content')

<form method="post" class="form" action="{{ route('skills.store') }}">
    @csrf
    <div class="container">
        <div class="form-group">
            <label for="name">Name :</label>
            <input type="text" class="form-control" name="name"/>
            <label for="desc">Description :</label>
            <input type="text" class="form-control" name="desc"/>
            <label for="logo">Logo :</label>
            <input type="text" class="form-control" name="logo">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection
