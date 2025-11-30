@extends('admin_new.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-7">

                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4">

                        <h2 class="fw-bold mb-4">Tambah In-House Program</h2>

                        <form action="{{ route('in-house-program-update', $InHouseProgram->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="form-group mb-3 col-md-6">
                                    <label class="soft-label">Sub Reason Title</label>
                                    <input type="text" name="sub_reason_title" class="form-control soft-input"
                                        value="{{ old('sub_reason_title', $InHouseProgram->sub_reason_title) }}" required>
                                </div>

                                <div class="form-group mb-3 col-md-6">
                                    <label class="soft-label">Sub Reason Description</label>
                                    <textarea name="sub_reason_description" class="form-control soft-textarea" required>{{ old('sub_reason_description', $InHouseProgram->sub_reason_description) }}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mb-3 col-md-6">
                                    <label class="soft-label">Program Title</label>
                                    <input type="text" name="program_title" class="form-control soft-input"
                                        value="{{ old('program_title', $InHouseProgram->program_title) }}" required>
                                </div>

                                <div class="form-group mb-3 col-md-6">
                                    <label class="soft-label">Program Duration</label>
                                    <input type="text" name="program_duration" class="form-control soft-input"
                                        value="{{ old('program_duration', $InHouseProgram->program_duration) }}" required>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="soft-label">Program Description</label>
                                <textarea name="program_description" class="form-control soft-textarea" required>{{ old('program_description', $InHouseProgram->program_description) }}</textarea>
                            </div>

                            <div class="row">
                                <div class="mb-4">
                                    <label class="form-label fw-semibold">Upload Foto</label>
                                    <input type="file" name="program_image" id="program_image" class="dropify"
                                        data-default-file="{{ $InHouseProgram->program_image ? asset('storage/' . $InHouseProgram->program_image) : '' }}"
                                    data-max-file-size="2M" data-allowed-file-extensions="jpg jpeg png"
                                        data-show-remove="true" required />
                                    <small class="text-muted">Format: JPG • JPEG • PNG — Max 2MB</small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mb-3 col-md-6">
                                    <label class="soft-label">Highlights Title</label>
                                    <input type="text" name="highlights_title" class="form-control soft-input"
                                        value="{{ old('highlights_title' , $InHouseProgram->highlights_title) }}" required>
                                </div>

                                <div class="form-group mb-3 col-md-6">
                                    <label class="soft-label">Highlights Description</label>
                                    <textarea name="highlights_description" class="form-control soft-textarea" required>{{ old('highlights_description', $InHouseProgram->highlights_description) }}</textarea>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group mb-3 col-md-6">
                                    <label class="soft-label">Program Delivery Title</label>
                                    <input type="text" name="program_delivery_title" class="form-control soft-input"
                                        value="{{ old('program_delivery_title', $InHouseProgram->program_delivery_title) }}" required>
                                </div>

                                <div class="form-group mb-3 col-md-6">
                                    <label class="soft-label">Program Delivery Description</label>
                                    <textarea name="program_delivery_description" class="form-control soft-textarea" required>{{ old('program_delivery_description', $InHouseProgram->program_delivery_description) }}</textarea>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="soft-label">Target Audience Description</label>
                                <textarea name="target_audience_description" class="form-control soft-textarea" required>{{ old('target_audience_description', $InHouseProgram->target_audience_description) }}</textarea>
                            </div>

                            <div class="text-right mt-4">
                                <button type="submit" class="btn btn-pink">Submit</button>
                            </div>


                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
