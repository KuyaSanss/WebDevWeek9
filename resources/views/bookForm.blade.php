<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <p>
            <label for="title">Title</label><br>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        </p>

        <p>
            <label for="writer">Writer</label><br>
            <input type="text" id="writer" name="writer" value="{{ old('writer') }}" required>
        </p>

        <p>
            <label for="published_year">Published year</label><br>
            <input type="number" id="published_year" name="published_year" value="{{ old('published_year') }}" min="1901" max="2155" required>
        </p>

        <p>
            <label for="cover">Cover (gambar)</label><br>
            <input type="file" id="cover" name="cover" accept="image/*">
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('book') }}">Kembali</a>
    </form>
</body>
</html>
