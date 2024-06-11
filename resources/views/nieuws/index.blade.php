<!DOCTYPE html>
<html>
<head>
    <title>Nieuws Index</title>
</head>
<body>
    <h1>Nieuws</h1>
    <div>
        <a href="{{ route('nieuws.create') }}">Create Nieuws</a>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titel</th>
                <th>Beschrijving</th>
                <th>Aanmaakdatum</th>
                <th>Categorie</th>
                <th>User</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nieuws as $nieuw)
                <tr>
                    <td>{{ $nieuw->nieuws_id }}</td>
                    <td>{{ $nieuw->titel }}</td>
                    <td>{{ $nieuw->beschrijving }}</td>
                    <td>{{ $nieuw->aanmaakdatum }}</td>
                    <td>{{ $nieuw->categorie->titel ?? 'Geen categorie' }}</td>
                    <td>{{ $nieuw->user->name ?? 'Geen gebruiker' }}</td>
                    <td>
                        <a href="{{ route('nieuws.edit', $nieuw->nieuws_id) }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('nieuws.destory', $nieuw->nieuws_id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
