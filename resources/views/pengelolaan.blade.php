@extends('layouts.app')

@section('content')
    <h2>Pengelolaan</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['stok'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
