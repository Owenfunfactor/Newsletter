@extends('publichome')

@section('content')
    <div class="bg-light p-4 mb-5 text-center">
        <div class="container">
            <h1>Bienvenus dans notre agence de marketing</h1>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
    </div>

    <div class="d-flex justify-content-center" style="margin-top: 150px;">
        <a href="{{ route('formulaire.create') }}" class="btn btn-primary">S'inscrire à la Newsletter</a>
    </div>
@endsection
