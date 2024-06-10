<h1>Categories</h1>
<div>
    @if (session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
</div>
<div>
    <a href="{{ route('categories.create') }}">Create categorie</a>
</div>
<div>
    <table border="1px">
        <tr>
            <th>Titel</th>
            <th>Beschrijving</th>
            <th>Aanmaakdatum</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        @foreach ($categories as $categorie)
            <tr>
                <td>{{ $categorie->titel }}</td>
                <td>{{ $categorie->beschrijving }}</td>
                <td>{{ $categorie->aanmaakdatum }}</td>
                <td>
                    <a href="{{ route('categories.edit', $categorie->categorie_id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('categories.destory', $categorie->categorie_id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
