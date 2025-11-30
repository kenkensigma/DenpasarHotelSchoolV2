@extends('admin_new.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid py-3">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h3 class="fw-bold mb-1">Pendaftaran Management</h3>
                <p class="text-muted mb-0">Manage all registration on your website.</p>
            </div>

            <a href="{{ route('daftar-add') }}" class="btn btn-primary shadow-sm px-4 py-2">
                <i class="bi bi-plus-circle"></i> Manage Registration
            </a>
        </div>

        <!-- CARD WRAPPER -->
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body p-0">

                <table class="table table-hover mb-0 align-middle">
                    <thead class="bg-light">
                        <tr>
                            <th class="px-4 py-3">No</th>
                            <th class="py-3">Nama</th>
                            <th class="py-3">Email</th>
                            <th class="py-3">Nomor Hp</th>
                            <th class="py-3">Bukti Bayar</th>
                            <th class="py-3">Status</th>
                            <th class="py-3 text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($pendaftaran as $ondesk => $content)
                            <tr>
                                <td class="px-4">{{ $ondesk + 1 }}</td>
                                <td>{{ Str::limit(strip_tags($content->nama_lengkap), 10) }}</td>
                                <td>{{ Str::limit(strip_tags($content->email), 10) }}</td>
                                <td>{{ Str::limit(strip_tags($content->nomor_ponsel), 20) }}</td>

                                <td>
                                    @if ($content->bukti_pembayaran)
                                        <img src="{{ asset('storage/' . $content->bukti_pembayaran) }}"
                                            onclick="openImage('{{ asset('storage/' . $content->bukti_pembayaran) }}')"
                                            class="rounded shadow-sm"
                                            style="width: 80px; height: 70px; object-fit: cover; cursor: pointer;">
                                    @else
                                        Tidak ada bukti
                                    @endif
                                </td>

                                <td>
                                    @if ($content->status == 1)
                                        <span class="badge bg-success rounded-pill px-3 py-2">Show</span>
                                    @else
                                        <span class="badge bg-danger rounded-pill px-3 py-2">Hide</span>
                                    @endif
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('daftar.edit', $content->id) }}"
                                        class="btn btn-outline-primary btn-sm rounded-pill px-3">
                                        Edit
                                    </a>

                                    <form action="{{ route('daftar.destroy', $content->id) }}" method="POST"
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

    <script>
        function openImage(url) {
            window.open(url, '_blank');
        }
    </script>

@endsection
