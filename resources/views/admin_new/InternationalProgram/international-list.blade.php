@extends('admin_new.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid py-3">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h3 class="fw-bold mb-1">International Program Management</h3>
                <p class="text-muted mb-0">Manage all international programs on your website.</p>
            </div>

            <a href="{{ route('international-add') }}" class="btn btn-primary shadow-sm px-4 py-2">
                <i class="bi bi-plus-circle"></i> Add International Program
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
                            <th class="py-3">Description</th>
                            <th class="py-3">Images</th>
                            <th class="py-3">Tag</th>
                            <th class="py-3">Status</th>
                            <th class="py-3 text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($MainInternationalPrograms as $key => $item)
                            <tr>
                                <td class="px-4">{{ $key + 1 }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ Str::limit(strip_tags($item->description), 50) }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $item->image) }}" class="rounded shadow-sm"
                                        style="width: 80px; height: 70px; object-fit: cover;">

                                </td>
                                <td>{{ $item->tag ?? '-' }}</td>
                                <td class="text-center">
                                    @if ($item->status == 1)
                                        <span class="badge bg-success rounded-pill px-3 py-2">SHOW</span>
                                    @else
                                        <span class="badge bg-danger rounded-pill px-3 py-2">HIDE</span>
                                    @endif
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('international-edit', $item->id) }}"
                                        class="btn btn-outline-primary btn-sm rounded-pill px-3">
                                        Edit
                                    </a>

                                    <form action="{{ route('international-delete', $item->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-3">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection
