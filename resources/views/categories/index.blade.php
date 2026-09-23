@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
    <h1>Daftar Kategori</h1>

    @if (session('success'))
        <div style="color: #16a34a; margin-bottom: 15px; font-weight: bold;">{{ session('success') }}</div>
    @endif

    <p><a href="{{ route('categories.create') }}" class="btn">+ Tambah Kategori</a></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category['id'] }}</td>
                    <td>{{ $category['nama_kategori'] }}</td>
                    <td>{{ $category['deskripsi'] ?? '-' }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category['id']) }}">Edit</a>
                        |
                        <form class="inline" action="{{ route('categories.destroy', $category['id']) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background:none; border:none; color:#dc2626; cursor:pointer; padding:0; font:inherit;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada data kategori.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        {{ $categories->links() }}
    </div>
@endsection