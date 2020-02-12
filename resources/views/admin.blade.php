@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if ($admin == true)
                        <p>Vous êtes admin</p>
                        <form method="post" action="{{route('admin/connexion')}}">
                            <label for="user-select">Utilisateurs</label>
                            <select name="user">
                                <option value="">User</option>
                            </select>
                        </form>

                    @else
                        <p>Vous n'êtes pas admin</p>
                    <div class="alert alert-dark">
                        <a href="{{route('home')}}">Retour à l'accueil</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
