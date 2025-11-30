@extends('admin_new.layout')

@section('title', 'Tambah Sub Tailor Program')

@section('content')

<style>
    input, textarea, select {
        all: unset;
        box-sizing: border-box;
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        background: #fff;
        font-size: 14px;
    }

    textarea {
        min-height: 120px;
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

    .select-wrapper {
        width: 100%;
    }

    .button-container {
        display: flex;
        justify-content: flex-end;
        margin-top: 25px;
    }

    button {
        padding: 10px 24px;
        background: #ff2f7b;
        border: none;
        color: white;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
    }
</style>

<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">

                    <h2 class="fw-bold mb-4">Tambah Sub Tailor Program</h2>

                    <form action="{{ route('sub-tailor-program-store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Parent Program -->
                        <div class="form-group">
                            <label>Pilih Tailor Program Utama</label>
                            <div class="select-wrapper">
                                <select name="tailor_program_id">
                                    <option value="">-- pilih program utama --</option>
                                    @foreach($SubTailorPrograms as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Title -->
                        <div class="form-group">
                            <label>Judul Sub Program</label>
                            <input type="text" name="option_title" placeholder="Masukkan judul sub program">
                        </div>

                        <!-- Description -->
                        <div class="form-group">
                            <label>Deskripsi Sub Program</label>
                            <textarea name="option_description" placeholder="Masukkan deskripsi"></textarea>
                        </div>

                        <!-- Image -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Upload Foto</label>
                            <input 
                                type="file" 
                                name="option_image" 
                                class="dropify"
                                data-max-file-size="2M"
                                data-allowed-file-extensions="jpg jpeg png"
                                data-show-remove="true"
                                required
                            />
                            <small class="text-muted">Format: JPG • JPEG • PNG — Max 2MB</small>
                        </div>

                        <div class="button-container">
                            <button type="submit">Simpan</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
