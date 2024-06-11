<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Create New</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('nieuws.store') }}" method="post">
        @csrf
        <div>
            <label for="titel">Titel</label>
            <input type="text" name="titel" placeholder="Titel..." value="{{ old('titel') }}">
        </div>
        <div>
            <label for="beschrijving">Beschrijving</label>
            <textarea name="beschrijving" id="beschrijving" cols="30" rows="10" placeholder="Beschrijving...">{{ old('beschrijving') }}</textarea>
        </div>
        <div>
            <label for="aanmaakdatum">Aanmaakdatum</label>
            <input type="date" name="aanmaakdatum" placeholder="Aanmaakdatum..." value="{{ old('aanmaakdatum') }}">
        </div>
        <div>
            <label for="categorie_id">Categorie</label>
            <select name="categorie_id">
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->categorie_id }}">{{ $categorie->titel }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" value="Save">
        </div>
    </form>
</body>
</html>
