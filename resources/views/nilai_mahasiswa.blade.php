@extends('layouts.master')

@section('title', 'Nilai Mahasiswa')

@section('content')
<h1>Nilai Mahasiswa</h1>

<table class="table">
    <thead>
        <tr>
            @foreach ($judulKolom as $j)
            <th scope="col">{{ $j }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $s)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $s['nama'] }}</td>
            <td>{{ $s['nilai'] }}</td>
            <td>{{{ ($s['nilai']>60) ? 'Lulus' : 'Tidak Lulus' }}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop