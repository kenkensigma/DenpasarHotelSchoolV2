@extends('admin_new.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid py-3">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h3 class="fw-bold mb-1">Gallery Management</h3>
                <p class="text-muted mb-0">Manage all gallery photos on your website.</p>
            </div>

            <a href="{{ route('gallery-add') }}" class="btn btn-primary shadow-sm px-4 py-2">
                <i class="bi bi-plus-circle"></i> Add Photo
            </a>
        </div>

        <!-- CARD WRAPPER -->
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body p-0">

                <table class="table table-hover mb-0 align-middle">
                    <thead class="bg-light">
                        <tr>
                            <th class="px-4 py-3">No</th>
                            <th class="py-3">Photo</th>
                            <th class="py-3">Description</th>
                            <th class="py-3 text-center">Status</th>
                            <th class="py-3 text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($gallery as $index => $content)
                            @php
                                $firstImage = $content->images ? explode(',', $content->images)[0] : null;
                            @endphp

                            <tr>
                                <td class="px-4">{{ $index + 1 }}</td>

                                <td>
                                    @if ($firstImage && file_exists(storage_path('app/public/' . $firstImage)))
                                        <img src="{{ asset('storage/' . $firstImage) }}" class="rounded shadow-sm"
                                            style="width: 80px; height: 70px; object-fit: cover;">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>

                                <td class="fw-semibold">{{ $content->description ?? '—' }}</td>

                                <td class="text-center">
                                    @if ($content->status == 1)
                                        <span class="badge bg-success rounded-pill px-3 py-2">SHOW</span>
                                    @else
                                        <span class="badge bg-danger rounded-pill px-3 py-2">HIDE</span>
                                    @endif
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('gallery.edit', $content->id) }}"
                                        class="btn btn-outline-primary btn-sm rounded-pill px-3">Edit</a>

                                    <form action="{{ route('gallery.destroy', $content->id) }}" method="POST"
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
                                <td colspan="5" class="text-center py-4 text-muted">No gallery data available</td>
                            </tr>
                        @endforelse
                    </tbody>


                </table>
            </div>
        </div>
    </div>

@endsection
