@extends('admin_new.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">

                    <h2 class="fw-bold mb-4">Edit News / Event</h2>

                    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group mb-3 col-md-6">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-control" name="category" required>
                                    <option value="">None</option>
                                    <option value="Beasiswa"
                                        {{ old('category', $news->category ?? '') == 'Beasiswa' ? 'selected' : '' }}>
                                            Beasiswa</option>
                                    <option value="Pendidikan"
                                        {{ old('category', $news->category ?? '') == 'Pendidikan' ? 'selected' : '' }}>
                                            Pendidikan</option><!-- Ubah jadi string -->
                                </select>
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label for="date" class="form-label">Date</label>
                                    <input type="date" name="date" id="date" class="form-control"
                                        value="{{ $news->date }}" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ $news->title }}" required>
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" id="content" cols="30" rows="10" class="form-control" required>{{ strip_tags($news->content) }}</textarea>
                        </div>
                        <!-- Upload Foto -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Upload Foto</label>
                            <input 
                                type="file" 
                                name="photo" 
                                class="dropify"
                                data-max-file-size="2M"
                                data-allowed-file-extensions="jpg jpeg png"
                                data-show-remove="true"
                                data-default-file="{{ asset('storage/' . $news->photo) }}"
                            />
                            <small class="text-muted">Format: JPG • JPEG • PNG — Max 2MB</small>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3 col-md-6">
                                <label for="caption_image" class="form-label">Caption Image</label>
                                <input type="text" name="caption_image" id="caption_image"
                                    class="form-control" value="{{ $news->caption_image }}">
                            </div>
                            <diiv class="form-group mb-3 col-md-6">
                                <label for="tags" class="form-label">Tags</label>
                                <input type="text" name="tags" id="tags" class="form-control"
                                    value="{{ $news->tags }}">
                            </diiv>
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="keyword" class="form-label">Keywords</label>
                            <input type="text" name="keyword" id="keyword" class="form-control"
                                value="{{ $news->keyword }}">
                        </div>
                        <div class="form-group mb-3 col-md-3">
                            <label for="hit" class="form-label">Hit</label>
                            <input type="number" name="hit" id="hit" class="form-control"
                                value="{{ $news->hit }}">
                        </div>

                        <!-- Status -->
                        <div class="mb-4 col-md-4">
                            <label class="form-label fw-semibold">Status</label>
                            <select class="form-select rounded-3" name="status">
                                <option value="0">Hide</option>
                                <option value="1">Show</option>
                            </select>
                        </div>

                        <button 
                            type="submit" 
                            class="btn px-4 py-2 fw-semibold"
                            style="background:#ff2f7b; border:none; color:white; border-radius:10px;">
                            Simpan
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
