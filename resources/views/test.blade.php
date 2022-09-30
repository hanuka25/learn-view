<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/css/app.css">

    </head>

    <body>
{{-- Testing Blade --}}

@php
    $html = '<p>Lorem ipsum</p>';
@endphp

{{ $harga }}

 {{ $html}} {{--cetak sebagai text biasa --}}

{!! $html !!} {{--cetak sebagai text biasa pake struktur html --}}

@if ($harga > 100000)
    <p style="color: red;">Kemahalan</p>
@elseif ($harga > 50000)
    <p>Oke lah!</p>
@else
    <p>Kemurahan</p>
@endif

@switch(true)
    @case($harga > 100000)
    <p style="color: red;">Kemahalan</p>
        @break

    @case($harga > 50000)
    <p>Oke lah!</p>
        @break

    @default
    <p>Kemurahan</p>
@endswitch

{{-- forelse adalah gabungan foreach dan elemen array --}}
@php
    $list_barang = [
        [
            'kode' => 1,
            'nama_barang' => 'Kalkulator',
            'harga_barang' => 100000,
            'qty' => 50
],
[
            'kode' => 2,
            'nama_barang' => 'Spidol',
            'harga_barang' => 10000,
            'qty' => 100
],
[
            'kode' => 3,
            'nama_barang' => 'Pensil',
            'harga_barang' => 3000,
            'qty' => 200
],
[
            'kode' => 4,
            'nama_barang' => 'Kulkas',
            'harga_barang' => 3000000,
            'qty' => 3
]
];
@endphp
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Qty. </th>
        </tr>
    </thead>

    <tbody>
@forelse ( $list_barang as $barang )
    <tr>
        <td>{{ $barang['kode'] }}</td>
        <td>{{ $barang['nama_barang']}}</td>
        <td>{{ $barang['harga_barang']}}</td>
        <td>{{ $barang['qty']}}</td>
    </tr>
@empty
    <tr>
        <td colspan="4">
            <center>Data barang kosong!</center>
        </td>
    </tr>
@endforelse
</tbody>
</table>

<script src="/js/app.js"></script>
</body>
</html>
