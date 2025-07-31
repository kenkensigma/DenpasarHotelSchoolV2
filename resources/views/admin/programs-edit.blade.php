<h1>Edit Program</h1>

<form method="POST" action="{{ route('programs.update', $program->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Nama Program:</label>
    <input type="text" name="name" value="{{ $program->name }}" required>

    <label>Kategori:</label>
    <select name="category_id" required>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $program->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach
    </select>

    <label>Durasi:</label>
    <input type="text" name="duration" value="{{ $program->duration }}">

    <label>Deskripsi:</label>
    <textarea name="description">{{ $program->description }}</textarea>

    <label>Foto Lama:</label>
    @if($program->image)
        <img src="{{ asset('storage/images/' . $program->image) }}" width="150">
    @endif

    <label>Ganti Foto:</label>
    <input type="file" name="image">

    <button type="submit">Update</button>
</form>