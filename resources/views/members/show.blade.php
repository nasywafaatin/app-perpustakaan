@extends('layouts.app')

@section('title', 'Detail Anggota')

@section('content')
    <h1>Detail Anggota</h1>
    <p><a href="{{ route('members.index') }}">&larr; Kembali ke daftar anggota</a></p>

    <table>
        <tr>
            <th style="width: 30%; text-align: left; padding: 8px;">ID</th>
            <td style="padding: 8px;">{{ $member['id'] }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">Nama Lengkap</th>
            <td style="padding: 8px;">{{ $member['nama'] }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">NIM</th>
            <td style="padding: 8px;">{{ $member['nim'] }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">Email</th>
            <td style="padding: 8px;">{{ $member['email'] }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">Nomor Telepon</th>
            <td style="padding: 8px;">{{ $member['nomor_telepon'] }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">Alamat</th>
            <td style="padding: 8px;">{{ $member['alamat'] }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">Status</th>
            <td style="padding: 8px;">{{ ucfirst($member['status']) }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">Terdaftar Sejak</th>
            <td style="padding: 8px;">{{ $member['created_at'] }}</td>
        </tr>
    </table>

    <p style="margin-top: 20px;">
        <a href="{{ route('members.edit', $member['id']) }}" class="btn">Edit Data</a>
    </p>
@endsection