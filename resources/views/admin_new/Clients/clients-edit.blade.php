@extends('admin_new.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-7">

                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4">

                        <h2 class="fw-bold mb-4">Tambah Foto Klien</h2>

                        <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Upload Foto -->
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Upload Foto</label>
                                <input type="file" name="image_path" id="image_path" class="dropify" data-max-file-size="2M"
                                    data-allowed-file-extensions="jpg jpeg png" data-default-file="{{ asset('storage/' . $client->image_path) }}" data-show-remove="true" required />
                                <small class="text-muted">Format: JPG • JPEG • PNG — Max 2MB</small>
                            </div>

                            <!-- Url -->
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Url</label>
                                <input type="url" name="link" id="link" class="form-control"
                                    style="
                                     background: #f8f9fa;
                                     border: 1px solid #ddd;
                                     border-radius: 10px;
                                     padding: 12px;                                         
                                     "
                                    placeholder="https://contoh.com" required value="{{ old('link', $client->link ?? '') }}">
                            </div>

                            <button type="submit" class="btn px-4 py-2 fw-semibold"
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
