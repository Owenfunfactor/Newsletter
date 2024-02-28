@extends('admin.admin')

@section('title', $news->exists ? "Editer un bien" : "Créer un bien")

@section('content')
    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($news->exists ? 'news.update' : 'news.store', ['news' => $news]) }}" method="post">
        @csrf
        @method($news->exists ? 'put' : 'post')


        @include("shared.input", ['class' => 'col', 'name' => 'titre', 'value' => $news->titre])
        @include("shared.input", ['type' => 'textarea', 'name' => 'contenue', 'value' => $news->contenue])


        <div>
            <button class="btn btn-primary">
                @if($news->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>

    </form>

@endsection
