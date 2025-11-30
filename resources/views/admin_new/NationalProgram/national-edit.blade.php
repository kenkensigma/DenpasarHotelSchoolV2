@extends('admin_new.layout')

@section('title', 'Dashboard')

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

    .form-select {
        all: unset;
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        background: #fff;
        font-size: 14px;
        box-sizing: border-box;
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

                    <h2 class="fw-bold mb-4">Edit National Program</h2>

                    <form action="{{ route('national-update', $MainNationalProgram->id) }}" 
                          method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title"
                                   value="{{ old('title', $MainNationalProgram->title) }}" required>
                        </div>

                        <!-- Sub Title -->
                        <div class="form-group">
                            <label>Sub Title</label>
                            <input type="text" name="sub_title"
                                   value="{{ old('sub_title', $MainNationalProgram->sub_title) }}" required>
                        </div>

                        <!-- Tag -->
                        <div class="form-group">
                            <label>Tag</label>
                            <input type="text" name="tag"
                                   value="{{ old('tag', $MainNationalProgram->tag) }}" required>
                        </div>

                        <!-- Deskripsi -->
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="description" rows="4" required>{{ old('description', strip_tags($MainNationalProgram->description)) }}</textarea>
                        </div>

                        <!-- Upload Foto -->
                        <div class="form-group">
                            <label>Upload Foto</label>

                            <input 
                                type="file" 
                                name="image"
                                class="dropify"
                                data-max-file-size="2M"
                                data-allowed-file-extensions="jpg jpeg png"
                                data-show-remove="true"
                                data-default-file="{{ asset('storage/' . $MainNationalProgram->image) }}"
                            />

                            <small class="text-muted">Format: JPG • JPEG • PNG — Max 2MB</small>
                        </div>

                        <!-- Status -->
                        <div class="form-group" style="max-width:200px;">
                            <label>Status</label>
                            <select name="status">
                                <option value="0" {{ $MainNationalProgram->status == 0 ? 'selected' : '' }}>Hide</option>
                                <option value="1" {{ $MainNationalProgram->status == 1 ? 'selected' : '' }}>Show</option>
                            </select>
                        </div>

                        <button type="submit" class="btn-submit">Simpan</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
