<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>Nieuw Artikel</title>
</head>

<body>
<div id="wrapper">
    <div id="page" class="container">
        <div class="creatediv">
        <h1>Nieuw Artikel</h1>
            <p>Alles met een * moet ingevuld worden</p>

        <form class="articleform" method="POST" action="/articles">
            @csrf
            <div class="field" for="">
                <label class="label" for="titel">* Titel</label>

                <div class="control">
                    <input class="input @error('titel') is-danger @enderror" type="text" name="titel" id="titel">

                    @error('titel')
                    <p class="help is-danger" style="color: red;">{{ $errors->first('titel') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="beschrijving">* Beschrijving</label>

                <div class="control">
                    <textarea class="textarea  @error('beschrijving') is-danger @enderror" name="beschrijving"
                              id="beschrijving"></textarea>

                    @error('beschrijving')
                    <p class="help is-danger" style="color: red;">{{ $errors->first('beschrijving') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="tekst">* Tekst</label>

                <div class="control">
                    <textarea class="textarea @error('tekst') is-danger @enderror" name="tekst" id="tekst"></textarea>

                    @error('tekst')
                    <p class="help is-danger" style="color: red;">{{ $errors->first('tekst') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Toevoegen</button>
                </div>
            </div>

        </form>
        </div>
    </div>
</div>
</body>