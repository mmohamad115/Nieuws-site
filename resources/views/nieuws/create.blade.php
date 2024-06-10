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
    <form action="{{ route('nieuws.store') }}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="titel">Titel</label>
            <input type="text" name="titel" placeholder="Titel...">
        </div>
        <div>
            <label for="beschrijving">Beschrijving</label>
            <textarea name="beschrijving" id="beschrijving" cols="30" rows="10" placeholder="Beschrijving..."></textarea>
            {{-- <input type="text" name="beschrijving" placeholder="Beschrijving..."> --}}
        </div>
        <div>
            <label for="aanmaakdatum">Aanmaakdatum</label>
            <input type="date" name="aanmaakdatum" placeholder="Aanmaakdatum...">
        </div>
        <div>
            <input type="submit" value="Save">
        </div>
    </form>
</body>
</html>