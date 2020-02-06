@extends('layouts.app')

@section('content')
    <form action="/competences" method="post">
    {{ csrf_field() }}
        <input type="name" name="competences" placeholder="competences">
        <input type="submit" value="Ajouter">
    </form>
@endsection
