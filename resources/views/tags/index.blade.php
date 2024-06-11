<h1>Tags</h1>
<div>
    @if (session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
</div>
<div>
    <a href="{{ route('tags.create') }}">Create tags</a>
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

        @foreach ($tags as $tag)
            <tr>
                <td>{{ $tag->titel }}</td>
                <td>{{ $tag->beschrijving }}</td>
                <td>{{ $tag->aanmaakdatum }}</td>
                <td>
                    <a href="{{ route('tags.edit', $tag->tag_id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('tags.destory', $tag->tag_id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
