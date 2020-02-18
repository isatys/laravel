@extends('layouts.app')

@section('title', 'Skill Table')

@section('content')

<a href="{{ route('skills.create') }}">Ajouter</a>
<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Description</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
    @foreach($skills as $skill)
    <tr>
        <td>{{$skill->id}}</td>
        <td>{{$skill->name}}</td>
        <td>{{$skill->description}}</td>
        <td><form action="{{ route('skills.edit', $skill->id) }}" method="post">
                @csrf
                @method('EDIT')
                <button type="submit">Modifier</button>
            </form>
            <form action="{{ route('skills.destroy', $skill->id) }}" method="post">
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
