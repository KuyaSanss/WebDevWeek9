<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, td {
            border: 1px solid black;
        }
        td {
            padding: 4px 8px;
        }
    </style>
</head>
<body>
    <form action="{{ route('books.create') }}" method="GET">
        <button type="submit">+ Tambah Buku</button>
    </form>
    <table>
        <tr>
            <td>title</td>
            <td>writer</td>
            <td>published year</td>
            <td>cover</td>
            <td>action</td>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->writer }}</td>
            <td>{{ $book->published_year }}</td>
            <td>{{ $book->cover_path }}</td>
            <td>
                <form action="{{ route('books.show', $book) }}" method="GET">
                    <button type="submit">Detail</button>
                </form>
                <form action="{{ route('books.edit', $book) }}" method="GET">
                    <button type="submit">Edit</button>
                </form>
                <form action="{{ route('books.destroy', $book) }}" method="POST" onsubmit="return confirm('Yakin hapus buku ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>