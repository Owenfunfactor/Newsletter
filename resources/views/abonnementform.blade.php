@extends('public')
@section('title', "Formulaire d'inscription")
@section('content')

    <h1>@yield('title')</h1>


    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="my-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="vstack gap-2" action="{{ route('formulaire.store', ['abonne' => $abonne])  }}" method="post">
        @csrf

        @include("shared.input", ['class' => 'col', 'name' => 'nom', 'value' => $abonne->nom])
        @include("shared.input", ['class' => 'col', 'name' => 'prénom','label'=> 'Prénom', 'value' => $abonne->prenom])
        @include("shared.input", ['class' => 'col', 'name' => 'email','label'=> 'Email', 'value' => $abonne->email])

        <div>
            <button class="btn btn-primary">S'inscrire</button>
        </div>

    </form>

@endsection
