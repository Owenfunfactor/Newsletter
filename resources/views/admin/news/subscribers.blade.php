@extends('admin.admin')

@section('title', $news->exists ? "Oui" : "Non")

@section('content')

    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="#" class="btn btn-success">Envoyer à tous </a>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th class="text-end">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($abonnés as $abonné)
            <tr>
                <td>{{ $abonné->nom }}</td>
                <td>{{ $abonné->prénom }}</td>
                <td>{{ $abonné->email }}</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <form action="{{ route('emailsender',['news' => $news,'abonné' => $abonné]) }}" method="post">
                            @csrf
                            @method('post')
                            <button class="btn btn-success">Envoyer </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection


