@extends ('layout-show')

@section ('title')
    {{ $article->title }}
@endsection

@section ('content')
    <div class="homediv">
    </div>
    <br>
    <div class="showdiv">
    <h1 class="h2">{{ $article->titel }}</h1>
    <h4>{{ $article->beschrijving }}</h4>
    <p>{{ $article->tekst }}</p>
    </div>
    <br>

    <form method="get" action="/articles/{{ $article->id }}/edit">
        <button class="articlebutton" type="submit">Wijzig Artikel</button>
    </form>

    <br>

    <form method="POST" action="/articles/{{ $article->id }}">
        @csrf
        @method('DELETE')
        <button class="articlebutton" type="submit">Verwijder Artikel</button>
    </form>
@endsection