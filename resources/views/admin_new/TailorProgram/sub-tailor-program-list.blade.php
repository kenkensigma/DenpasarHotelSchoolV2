@extends('admin_new.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid py-3">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h3 class="fw-bold mb-1">Sub Tailor Program Management</h3>
                <p class="text-muted mb-0">Manage all sub tailor programs on your website.</p>
            </div>

            <a href="{{ route('sub-tailor-program-add') }}" class="btn btn-primary shadow-sm px-4 py-2">
                <i class="bi bi-plus-circle"></i> Add Sub Tailor Program
            </a>
        </div>

        <!-- CARD WRAPPER -->
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body p-0">

                <table class="table table-hover mb-0 align-middle">
                    <thead class="bg-light">
                        <tr>
                            <th class="px-4 py-3">No</th>
                            <th class="py-3">Title</th>
                            <th class="py-3">Subtitle</th>
                            <th class="py-3">image</th>
                            <th class="py-3 text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($SubTailorPrograms as $index => $subtailor)
                            <tr>
                                <td class="px-4">{{ $index + 1 }}</td>

                                <td class="fw-semibold">{{ $subtailor->option_title ?? '—' }}</td>
                                <td class="fw-semibold">{{ $subtailor->option_subtitle ?? '—' }}</td>

                                <td>
                                    <img src="{{ asset('storage/' . $subtailor->option_image) }}" width="80" height="70"
                                        alt="Image">
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('sub-tailor-program-edit', $subtailor->id) }}"
                                        class="btn btn-outline-primary btn-sm rounded-pill px-3">Edit</a>

                                    <form action="{{ route('sub-tailor-program-delete', $subtailor->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-outline-danger btn-sm rounded-pill px-3">Delete</button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">No tailor program data available</td>
                            </tr>
                        @endforelse
                    </tbody>


                </table>
            </div>
        </div>
    </div>

@endsection
