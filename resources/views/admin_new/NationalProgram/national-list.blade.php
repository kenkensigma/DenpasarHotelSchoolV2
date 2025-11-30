@extends('admin_new.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-3">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h3 class="fw-bold mb-1">National Program Management</h3>
            <p class="text-muted mb-0">Manage national program.</p>
        </div>

        <a href="{{ route('national-add') }}" class="btn btn-primary shadow-sm px-4 py-2">
            <i class="bi bi-plus-circle"></i> Add Program
        </a>
    </div>

    <!-- CARD WRAPPER -->
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-0">

            <table class="table table-hover mb-0 align-middle">
                <thead class="bg-light">
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Sub-Title</th>
                        <th>Description</th>
                        <th>Images</th>
                        <th>Tag</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($MainNationalPrograms as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ Str::limit(strip_tags($item->title), 10) }}</td>
                            <td>{{ Str::limit(strip_tags($item->sub_title), 5) }}</td>
                            <td>{{ Str::limit(strip_tags($item->description), 5) }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $item->image) }}" width="80"
                                        height="70" alt="Image">
                            </td>
                            <td>{{ $item->tag ?? '-' }}</td>
                            <td>
                                @if ($item->status == 1)
                                    <span class="badge bg-success rounded-pill px-3 py-2">Show</span>
                                @else
                                    <span class="badge bg-danger rounded-pill px-3 py-2">Hide</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('national-edit', $item->id) }}"
                                    class="btn btn-outline-primary btn-sm rounded-pill px-3">Edit</a>

                                    <form action="{{ route('national-delete', $item->id) }}"
                                        method="POST" 
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin mau hapus?')">
                                        @csrf
                                        @method('DELETE')
                                            <button class="btn btn-sm btn-danger">Delete</button>
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
