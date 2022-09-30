@extends('layouts.master')

@section('title', 'Mahasiswa')

@section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Data Mahasiswa</h1>

        @component('components.alert')
            Berhasil menampilkan data mahasiswa!

            @slot('type')
            success
            @endslot
            @endcomponent

            <div class="row">
                <div class="col-sm-8 col-md-6 m-auto">
                    <ol class="list-group">
                        @forelse ($dtMahasiswa as $item)
                            <li class="list-group-item">{{ $item }}</li>
                        @empty
                            <div class="alert alert-dark d-inline-block">
                                Tidak ada data...
                            </div>
                        @endforelse
                    </ol>
                </div>
            </div>
        </div>
    @endsection
