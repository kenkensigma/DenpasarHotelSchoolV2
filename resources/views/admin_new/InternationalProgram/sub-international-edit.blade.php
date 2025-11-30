@extends('admin_new.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-7">

                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4">

                        <h2 class="fw-bold mb-4">Edit Sub International Program</h2>

                        <form action="{{ route('sub-international-update', $SubInternationalProgram->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="form-group mb-3 col-md-6">
                                    <label class="soft-label">Title</label>
                                    <input type="text" name="title" class="form-control soft-input"
                                        value="{{ old('title', $SubInternationalProgram->title) }}" required>
                                </div>

                                <div class="form-group mb-3 col-md-6">
                                    <label for="main_program_id" class="soft-label">Main Program</label>

                                    <select name="main_program_id" id="main_program_id" class="form-control soft-input"
                                        required>
                                        <option value="">-- Pilih Main Program --</option>

                                        @foreach ($MainInternationalPrograms as $program)
                                            <option value="{{ $program->id }}"
                                                {{ old('main_program_id', $SubInternationalProgram->main_program_id) == $program->id ? 'selected' : '' }}>
                                                {{ $program->tag }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="mb-4">
                                    <label class="form-label fw-semibold">Upload Foto</label>
                                    <input type="file" name="image" id="image" class="dropify"
                                    data-default-file="{{ asset('storage/' . $SubInternationalProgram->image) }}"    
                                    data-max-file-size="2M" data-allowed-file-extensions="jpg jpeg png"
                                        data-show-remove="true" required />
                                    <small class="text-muted">Format: JPG • JPEG • PNG — Max 2MB</small>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="soft-label">Description</label>
                                <textarea name="description" class="form-control soft-textarea" required>{{ old('description', $SubInternationalProgram->description) }}</textarea>
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
