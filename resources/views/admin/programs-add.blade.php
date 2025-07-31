<h1>Tambah Program Baru</h1>

<form method="POST" action="{{ route('programs.store') }}" enctype="multipart/form-data">
    @csrf

    <label>Nama Program:</label>
    <input type="text" name="name" required>

    <label>Kategori:</label>
    <select name="category_id" required>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <label>Durasi:</label>
    <input type="text" name="duration">

    <label>Deskripsi:</label>
    <textarea name="description"></textarea>

    <label>Foto:</label>
    <input type="file" name="image">

    <button type="submit">Simpan</button>
</form>