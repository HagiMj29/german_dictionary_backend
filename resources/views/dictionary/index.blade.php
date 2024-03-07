@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dictionary</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Data Kamus</b>
                </div>
            </div>
            <div class="panel-body">
                <a href="create" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
            </div>
            <form action="{{ route('dictionary.index') }}" method="GET" class="mb-3">
                @csrf
                <div class="input-group cutom-search-form">
                    
                    <input type="text" name="search" class="form-control" placeholder="Cari kategori"
                        value="{{ request('search') }}">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-info mx-3">Cari</button>
                        </span>
                </div>

            </form>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-stripped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Kata Indonesia</th>
                                <th class="text-center">Kata Jerman</th>
                                <th class="text-center">Jenis Kata</th>
                                <th class="text-center">Contoh Penggunaan</th>
                                <th class="text-center">Contoh Penggunaan dalam Bahasa Jerman</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @forelse ($dictionary as $data)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td class="text-center">{{ $data->kata_indonesia }}</td>
                                    <td class="text-center">{{ $data->kata_jerman }}</td>
                                    <td class="text-center">{{ $data->jenis_kata }}</td>
                                    <td class="text-center">{{ $data->contoh_penggunaan }}</td>
                                    <td class="text-center">{{ $data->contoh_penggunaan_jerman }}</td>
                                    <td class="text-center">{{ $data->keterangan }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('dictionary.destroy', ['dictionary' => $data->id]) }}" method="POST">
                                            <a href="{{ route('dictionary.edit', ['dictionary' => $data->id]) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
