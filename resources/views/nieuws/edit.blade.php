<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Nieuws</title>
</head>
<body>
    <h1>Edit Nieuws</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('nieuws.update', $nieuw->nieuws_id) }}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="titel">Titel</label>
            <input type="text" name="titel" placeholder="Titel..." value="{{ $nieuw->titel }}">
        </div>
        <div>
            <label for="beschrijving">Beschrijving</label>
            <textarea name="beschrijving" id="beschrijving" cols="30" rows="10" placeholder="Beschrijving...">{{ $nieuw->beschrijving }}</textarea>
        </div>
        <div>
            <label for="aanmaakdatum">Aanmaakdatum</label>
            <input type="date" name="aanmaakdatum" placeholder="Aanmaakdatum..." value="{{ $nieuw->aanmaakdatum }}">
        </div>
        <div>
            <label for="categorie_id">Categorie</label>
            <select name="categorie_id">
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->categorie_id }}" {{ $nieuw->categorie_id == $categorie->categorie_id ? 'selected' : '' }}>{{ $categorie->titel }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
