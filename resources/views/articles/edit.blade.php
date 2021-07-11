<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>Wijzig Artikel</title>
</head>

<body>
<div id="wrapper">
    <div id="page" class="container">
        <div class="editdiv">
        <h1>Wijzig Artikel</h1>

        <form class="articleform" method="POST" action="/articles/{{ $article->id }}">
            @csrf
            @method('PUT')

            <div class="field" for="">
                <label class="label" for="titel">Titel</label>

                <div class="control">
                    <input class="input @error('titel') is-danger @enderror" type="text" name="titel" id="titel"
                           value="{{ $article->titel }}">

                    @error('titel')
                    <p class="help is-danger" style="color: red;">{{ $errors->first('titel') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="beschrijving">Beschrijving</label>

                <div class="control">
                    <textarea class="textarea  @error('beschrijving') is-danger @enderror" name="beschrijving"
                              id="beschrijving">{{ $article->beschrijving }}</textarea>

                    @error('beschrijving')
                    <p class="help is-danger" style="color: red;">{{ $errors->first('beschrijving') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="tekst">Tekst</label>

                <div class="control">
                    <textarea class="textarea @error('tekst') is-danger @enderror" name="tekst"
                              id="tekst">{{ $article->tekst }}</textarea>

                    @error('tekst')
                    <p class="help is-danger" style="color: red;">{{ $errors->first('tekst') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Wijzigen</button>
                </div>
            </div>

        </form>
        </div>
    </div>
</div>
</body>