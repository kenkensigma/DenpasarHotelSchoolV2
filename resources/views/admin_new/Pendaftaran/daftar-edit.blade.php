@extends('admin_new.layout')

@section('title', 'Edit Pendaftar')

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

    .box {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .upload-box {
        width: 100%;
        height: 240px;
        border: 2px dashed #bbb;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        position: relative;
        padding: 15px;
        cursor: pointer;
    }

    .upload-box input {
        position: absolute;
        inset: 0;
        opacity: 0;
        cursor: pointer;
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
        <div class="col-lg-7">

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">

                    <h2 class="fw-bold mb-4">Edit Pendaftar</h2>

                    <form action="{{ route('daftar.update', $pendaftaran->id) }}" 
                          method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <!-- Nama Lengkap -->
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap"
                                   value="{{ old('nama_lengkap', $pendaftaran->nama_lengkap) }}"
                                   placeholder="Masukkan nama lengkap">
                        </div>

                        <!-- Row 1 -->
                        <div class="form-row">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir"
                                       value="{{ old('tanggal_lahir', $pendaftaran->tanggal_lahir) }}">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="select-wrapper">
                                    <select name="gender">
                                        <option value="">Pilih jenis kelamin</option>
                                        <option value="Laki-laki" {{ $pendaftaran->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ $pendaftaran->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="form-group">
                            <label>Alamat Lengkap</label>
                            <textarea name="alamat" rows="4"
                                      placeholder="Masukkan alamat lengkap">{{ old('alamat', $pendaftaran->alamat) }}</textarea>
                        </div>

                        <!-- Row 2 -->
                        <div class="form-row">
                            <div class="form-group">
                                <label>Asal Sekolah</label>
                                <input type="text" name="asal_sekolah"
                                       value="{{ old('asal_sekolah', $pendaftaran->asal_sekolah) }}"
                                       placeholder="Masukkan asal sekolah">
                            </div>

                            <div class="form-group">
                                <label>Media Sosial <span>(opsional)</span></label>
                                <input type="text" name="sosmed"
                                       value="{{ old('sosmed', $pendaftaran->sosmed) }}"
                                       placeholder="Masukkan media sosial">
                            </div>
                        </div>

                        <!-- Row 3 -->
                        <div class="form-row">
                            <div class="form-group">
                                <label>Nomor Ponsel</label>
                                <input type="tel" name="nomor_ponsel"
                                       value="{{ old('nomor_ponsel', $pendaftaran->nomor_ponsel) }}"
                                       placeholder="Masukkan nomor aktif">
                            </div>

                            <div class="form-group">
                                <label>Alamat Email</label>
                                <input type="email" name="email"
                                       value="{{ old('email', $pendaftaran->email) }}"
                                       placeholder="Masukkan email aktif">
                            </div>
                        </div>

                        <!-- Bukti Pembayaran -->
                        <label style="margin-left: 80px;">Bukti Pembayaran</label>

                        <div class="box">
                            <div class="upload-box" id="uploadArea">

                                @if ($pendaftaran->bukti_pembayaran)
                                    <img id="previewImage" src="{{ asset('storage/' . $pendaftaran->bukti_pembayaran) }}"
                                         style="width:100%; height:100%; object-fit:contain;">
                                @else
                                    <p id="uploadText">Drag and drop file here or <span>Upload File</span></p>
                                    <img id="previewImage"
                                         style="display:none; width:100%; height:100%; object-fit:contain;">
                                @endif

                                <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" accept="image/*">
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="form-group mt-3">
                            <label>Status</label>
                            <div class="select-wrapper">
                                <select name="status">
                                    <option value="0" {{ $pendaftaran->status == 0 ? 'selected' : '' }}>Hide</option>
                                    <option value="1" {{ $pendaftaran->status == 1 ? 'selected' : '' }}>Show</option>
                                </select>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="button-container">
                            <button type="submit">Update</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- Preview Script -->
<script>
    const fileInput = document.getElementById('bukti_pembayaran');
    const preview = document.getElementById('previewImage');
    const text = document.getElementById('uploadText');

    fileInput.addEventListener('change', function () {
        showPreview(this.files[0]);
    });

    function showPreview(file) {
        if (file && file.type.startsWith("image/")) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = "block";
                if (text) text.style.display = "none";
            };
            reader.readAsDataURL(file);
        }
    }
</script>

@endsection
