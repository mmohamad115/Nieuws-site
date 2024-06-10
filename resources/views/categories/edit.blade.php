<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>

<body>
    <h1>Edit Category</h1>
<form action="{{ route('categories.update', $categorie->categorie_id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="titel">Titel:</label>
        <input type="text" name="titel" id="titel" value="{{ $categorie->titel }}" required>
    </div>
    
    <div>
        <label for="beschrijving">Beschrijving:</label>
        <textarea name="beschrijving" id="beschrijving" cols="30" rows="10" placeholder="Beschrijving...">{{ $categorie->beschrijving }}</textarea>
    </div>
    
    <div>
        <label for="aanmaakdatum">Aanmaakdatum:</label>
        <input type="date" name="aanmaakdatum" id="aanmaakdatum" value="{{ $categorie->aanmaakdatum }}" required>
    </div>

    <div>
        <button type="submit">Update</button>
    </div>
</form>

</body>

</html>
