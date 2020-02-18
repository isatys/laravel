@extends('layouts.app')

@section('title', 'Update Skill')

@section('name')

<form method="post" class="form" action"{{ route('skills.update, $skill->id') }}">
@methode('PATCH')
@csrf
<div class="form-group">
    <label for="name">Name :</label>
    <input type="text" class="form-control" name="name"/>
    <label for="description">Description :</label>
    <input type="text" class="form-control" name="description"/>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
