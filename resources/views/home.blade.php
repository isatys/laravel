@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
          tu es connect� !
          <div class="alert alert-dark">
          <a href="{{route('admin')}}">Acc�der � l espace Admin</a>
          </div>
                    @foreach ($user_list as $user)
				<div class="alert alert-info">
					<p> Surnom: {{ $user['name'] }}</p>
					<p> Pr�nom: {{ $user['firstname'] }}</p>
					<p> Nom: {{ $user['lastname'] }}</p>
					<p> Email: {{ $user['email'] }} </p>
					<p> Bio: {{ !empty($user['bio']) ? $user['bio'] : "pas de bio" }} </p>
					<p> Comp�tences:  </p>			   
				 @foreach ($user->skills as $skill)
					<div class="alert alert-info">
						<p> Nom compétences: {{ $skill['name'] }} </p>
						<p> level: {{ $skill['pivot']['level'] }} </p>
					</div>
			    @endforeach
				</div>
		    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
