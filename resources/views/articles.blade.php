@extends ('layout')



@section ('title')
    Artikelen
@endsection

@section ('content')
<a href="/">Terug naar hoofdpagina</a>
    <h1 class="h1">Artikelen:</h1>

    @foreach ($articles as $article)
        <div class="articles">
            <h1 class="articles-h1">
                <a href="{{ $article->path() }}">{{ $article->titel }}</a>
            </h1>
            <p class="articles-p">{{$article->beschrijving}}</p>
        </div>
        <br>
    @endforeach

    <form method="get" action="/articles/create">
        <button class="articlebutton" type="submit">Nieuw Artikel Toevoegen</button>
    </form>

@endsection