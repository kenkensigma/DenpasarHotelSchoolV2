@extends('admin_new.layout')

@section('title', 'Edit Person')

@section('content')

<style>
    input, textarea, select {
        all: unset;
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-sizing: border-box;
        background: #fff;
        font-size: 14px;
    }

    textarea {
        min-height: 120px;
        resize: vertical;
    }

    .form-group {
        margin-bottom: 18px;
    }

    .form-row {
        display: flex;
        gap: 20px;
    }

    .form-row .form-group {
        flex: 1;
    }

    select {
        cursor: pointer;
    }

    .btn-submit {
        padding: 10px 24px;
        background: #ff2f7b;
        border: none;
        color: white;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 20px;
    }
</style>


<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">

                    <h2 class="fw-bold mb-4">Edit Person</h2>

                    <form action="{{ route('team.update', $teams->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Nama -->
                        <div class="form-group">
                            <label>Nama Panggilan</label>
                            <input type="text" name="nama_panggilan"
                                   value="{{ old('nama_panggilan', $teams->nama_panggilan) }}">
                        </div>

                        <!-- Roles -->
                        <div class="form-group">
                            <label>Roles</label>
                            <input type="text" name="roles"
                                   value="{{ old('roles', $teams->roles) }}">
                        </div>

                        <!-- Deskripsi -->
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="desc" rows="4">{{ old('desc', $teams->desc) }}</textarea>
                        </div>

                        <!-- Foto -->
                        <div class="form-group">
                            <label>Foto</label>
                            <input 
                                type="file" 
                                name="foto" 
                                class="dropify"
                                data-default-file="{{ $teams->foto ? asset('storage/' . $teams->foto) : '' }}"
                                data-max-file-size="2M"
                                data-allowed-file-extensions="jpg jpeg png"
                            />
                        </div>

                        <!-- CV -->
                        <div class="form-group">
                            <label>CV (PDF)</label>
                            <input 
                                type="file" 
                                name="cv" 
                                class="dropify"
                                data-default-file="{{ $teams->cv ? asset('storage/' . $teams->cv) : '' }}"
                                data-max-file-size="3M"
                                data-allowed-file-extensions="pdf"
                            />
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status">
                                <option value="0" {{ $teams->status == 0 ? 'selected' : '' }}>Hide</option>
                                <option value="1" {{ $teams->status == 1 ? 'selected' : '' }}>Show</option>
                            </select>
                        </div>

                        <button type="submit" class="btn-submit">
                            Simpan
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
