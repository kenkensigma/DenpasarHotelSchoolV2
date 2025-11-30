@extends('admin_new.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-7">

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">

                    <h2 class="fw-bold mb-4">Tambah Program</h2>

                    <form action="{{ route('national-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3 col-md-6">
                            <label for="title" class="form-label">Title</label>
                                <input type="text" id="title" name="title" class="form-control"
                                    value="{{ old('title') }}" required>
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label for="sub_title" class="form-label">Sub Title</label>
                                <input type="text" id="sub_title" name="sub_title" class="form-control"
                                    value="{{ old('sub_title') }}" required>
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label for="tag" class="form-label">Tag</label>
                                <input type="text" id="tag" name="tag" class="form-control"
                                    value="{{ old('tag') }}" required>
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Deskripsi</label>
                            <textarea 
                                name="description" 
                                rows="4"
                                class="form-control"
                                style="
                                    background: #f8f9fa;
                                    border: 1px solid #ddd;
                                    border-radius: 10px;
                                    padding: 12px;
                                    resize: vertical;
                                "
                                placeholder="Tulis deskripsi foto..."
                                required></textarea>
                        </div>

                        <!-- Upload Foto -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Upload Foto</label>
                            <input 
                                type="file" 
                                name="image" 
                                class="dropify"
                                data-max-file-size="2M"
                                data-allowed-file-extensions="jpg jpeg png"
                                data-show-remove="true"
                                required
                            />
                            <small class="text-muted">Format: JPG • JPEG • PNG — Max 2MB</small>
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
