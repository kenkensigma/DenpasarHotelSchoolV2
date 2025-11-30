@extends('admin_new.layout')

@section('title', 'Tambah Tailor Program')

@section('content')

<style>
    .custom-input {
        all: unset;
        box-sizing: border-box;
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc !important;
        border-radius: 6px;
        background: #fff;
        font-size: 14px;
    }

    .custom-textarea {
        all: unset;
        box-sizing: border-box;
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc !important;
        border-radius: 6px;
        background: #fff;
        font-size: 14px;
        min-height: 120px;
    }

    .form-group {
        margin-bottom: 18px;
    }

    .button-container {
        display: flex;
        justify-content: flex-end;
        margin-top: 25px;
    }

    .btn-main {
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

                    <h2 class="fw-bold mb-4">Tambah Tailor Program</h2>

                    <form action="{{ route('tailor-program-store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>Title Program</label>
                            <input type="text" name="title" class="custom-input" placeholder="Masukkan judul program">
                        </div>

                        <div class="form-group">
                            <label>Sub Title</label>
                            <input type="text" name="subtitle" class="custom-input" placeholder="Masukkan subtitle program">
                        </div>

                        <div class="form-group">
                            <label>Alasan Utama (Reason Main)</label>
                            <textarea name="reason_main" class="custom-textarea" placeholder="Alasan utama"></textarea>
                        </div>

                        {{-- =============== SUB REASON =============== --}}
                        <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                            <label class="fw-bold">Sub Reason</label>
                            <button type="button" class="btn btn-primary btn-sm" id="addSubReason">+ Tambah</button>
                        </div>

                        <div id="subReasonWrapper">
                            <div class="row g-3 sub-reason-item mb-2">
                                <div class="col-md-6">
                                    <input type="text" name="sub_reason_title[]" class="custom-input" placeholder="Masukkan judul sub reason">
                                </div>
                                <div class="col-md-6">
                                    <textarea name="sub_reason_description[]" class="custom-textarea" placeholder="Masukkan deskripsi"></textarea>
                                </div>
                            </div>
                        </div>

                        {{-- =============== TARGET AUDIENCE =============== --}}
                        <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                            <label class="fw-bold">Target Audience</label>
                            <button type="button" class="btn btn-primary btn-sm" id="addAudience">+ Tambah</button>
                        </div>

                        <div id="audienceWrapper">
                            <div class="row g-3 mb-2">
                                <div class="col-md-6">
                                    <input type="text" name="icon_target_audience[]" class="custom-input" placeholder="ex: fa-solid fa-user-group">
                                </div>
                                <div class="col-md-6">
                                    <textarea name="description_target_audience[]" class="custom-textarea" placeholder="Masukkan deskripsi audience"></textarea>
                                </div>
                            </div>
                        </div>

                        {{-- =============== HIGHLIGHTS =============== --}}
                        <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                            <label class="fw-bold">Highlights</label>
                            <button type="button" class="btn btn-primary btn-sm" id="addHighlight">+ Tambah</button>
                        </div>

                        <div id="highlightWrapper">
                            <div class="row g-3 mb-2">
                                <div class="col-md-6">
                                    <input type="text" name="highlights_title[]" class="custom-input" placeholder="Masukkan judul highlights">
                                </div>
                                <div class="col-md-6">
                                    <textarea name="highlights_description[]" class="custom-textarea" placeholder="Masukkan deskripsi highlights"></textarea>
                                </div>
                            </div>
                        </div>

                        {{-- =============== CAREER =============== --}}
                        <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                            <label class="fw-bold">Career</label>
                            <button type="button" class="btn btn-primary btn-sm" id="addCareer">+ Tambah</button>
                        </div>

                        <div id="careerWrapper">
                            <div class="row g-3 mb-2">
                                <div class="col-md-6">
                                    <input type="text" name="career_icon[]" class="custom-input" placeholder="ex: fa-solid fa-briefcase">
                                </div>
                                <div class="col-md-6">
                                    <textarea name="career_description[]" class="custom-textarea" placeholder="Masukkan deskripsi karir"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label>Harga Program</label>
                            <input type="number" name="price" class="custom-input" placeholder="Masukkan harga program">
                        </div>

                        <div class="button-container mt-4">
                            <button type="submit" class="btn-main">Simpan</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>


<script>
    // SUB REASON
    document.getElementById('addSubReason').addEventListener('click', () => {
        document.getElementById('subReasonWrapper').insertAdjacentHTML('beforeend', `
            <div class="row g-3 sub-reason-item mb-2">
                <div class="col-md-6">
                    <input type="text" name="sub_reason_title[]" class="custom-input" placeholder="Masukkan judul sub reason">
                </div>
                <div class="col-md-6">
                    <textarea name="sub_reason_description[]" class="custom-textarea" placeholder="Masukkan deskripsi"></textarea>
                </div>
            </div>
        `);
    });

    // AUDIENCE
    document.getElementById('addAudience').addEventListener('click', () => {
        document.getElementById('audienceWrapper').insertAdjacentHTML('beforeend', `
            <div class="row g-3 mb-2">
                <div class="col-md-6">
                    <input type="text" name="icon_target_audience[]" class="custom-input" placeholder="ex: fa-solid fa-user-group">
                </div>
                <div class="col-md-6">
                    <textarea name="description_target_audience[]" class="custom-textarea" placeholder="Masukkan deskripsi audience"></textarea>
                </div>
            </div>
        `);
    });

    // HIGHLIGHTS
    document.getElementById('addHighlight').addEventListener('click', () => {
        document.getElementById('highlightWrapper').insertAdjacentHTML('beforeend', `
            <div class="row g-3 mb-2">
                <div class="col-md-6">
                    <input type="text" name="highlights_title[]" class="custom-input" placeholder="Masukkan judul highlights">
                </div>
                <div class="col-md-6">
                    <textarea name="highlights_description[]" class="custom-textarea" placeholder="Masukkan deskripsi highlights"></textarea>
                </div>
            </div>
        `);
    });

    // CAREER
    document.getElementById('addCareer').addEventListener('click', () => {
        document.getElementById('careerWrapper').insertAdjacentHTML('beforeend', `
            <div class="row g-3 mb-2">
                <div class="col-md-6">
                    <input type="text" name="career_icon[]" class="custom-input" placeholder="ex: fa-solid fa-briefcase">
                </div>
                <div class="col-md-6">
                    <textarea name="career_description[]" class="custom-textarea" placeholder="Masukkan deskripsi karir"></textarea>
                </div>
            </div>
        `);
    });
</script>

@endsection
