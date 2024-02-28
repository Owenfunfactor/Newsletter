@extends('admin.admin')

@section('content')

    @section('title', 'Toutes les News')

    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('news.create') }}" class="btn btn-primary">Ajouter une News</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Contenue</th>
            <th class="text-end">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $new)
            <tr>
                <td>{{ $new->titre }}</td>
                <td>{{ $new->contenue }}</td>
                <td>
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="{{ route('admin.subscriber', $new) }}" class="btn btn-success">Envoyer à</a>
                        <a href="{{ route('news.edit', $new) }}" class="btn btn-primary">Editer</a>
                        <form action="{{ route('news.destroy', $new) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    {{ $news->links() }}
@endsection
