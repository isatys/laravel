@extends('layouts.app')

@section('title', 'Users Table')

@section('content')

<a href="{{ route('users.create') }}">Ajouter</a>
<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>Biographie</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->firstname}}</td>
        <td>{{$user->lastname}}</td>
        <td>{{$user->bio}}</td>
        <td>
            <form action="{{ route('users.show', $user->id) }}" method="post">
                @csrf
                @method('show')
                <button type="submit">Details</button>
            </form>
            <form action="{{ route('users.edit', $user->id) }}" method="post">
                @csrf
                @method('EDIT')
                <button type="submit">Modifier</button>
            </form>
            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection