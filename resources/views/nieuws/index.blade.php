<h1>Nieuws</h1>
<div>
    @if (session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
</div>
<div>
    <a href="{{ route('nieuws.create') }}">Create Nieuws</a>
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

        @foreach ($nieuws as $nieuw)
            <tr>
                <td>{{ $nieuw->titel }}</td>
                <td>{{ $nieuw->beschrijving }}</td>
                <td>{{ $nieuw->aanmaakdatum }}</td>
                <td>
                    <a href="{{ route('categories.edit', $nieuw->nieuws_id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('categories.destory', $nieuw->nieuws_id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
