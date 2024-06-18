<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <h1>Books of: {{ $author->name }}</h1>

    <table>
        <tr>
            <th>
                ISBN
            </th>
            <th>
               Book Title
            </th>
        </tr>
    @foreach ($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
    </tr>
    @endforeach
    </table>
</div>
