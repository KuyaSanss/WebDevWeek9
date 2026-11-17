<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
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
    <h1>Detail Buku</h1>

    <table>
        <tr>
            <td>title</td>
            <td>{{ $book->title }}</td>
        </tr>
        <tr>
            <td>writer</td>
            <td>{{ $book->writer }}</td>
        </tr>
        <tr>
            <td>published year</td>
            <td>{{ $book->published_year }}</td>
        </tr>
        <tr>
            <td>cover</td>
            <td>{{ $book->cover_path }}</td>
        </tr>
    </table>

    <br>
    <form action="{{ route('books.edit', $book) }}" method="GET">
        <button type="submit">Edit</button>
    </form>
    <form action="{{ route('book') }}" method="GET">
        <button type="submit">Kembali</button>
    </form>
</body>
</html>
