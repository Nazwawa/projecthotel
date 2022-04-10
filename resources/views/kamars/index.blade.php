@extends('layout.admin')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <div class="text-right"><a href="{{ route('kamars.create') }}" class="btn btn-primary">Create</a></div>
    </div>
    <div class="card-body">
        <table id="datatablesSimple"  class="table-bordered" style="width: 100%">
            <thead>
                <tr>
                    <th>Tipe Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th>Harga</th>
                    <th>Image</th>
                    <th width="200px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kamars as $kamar)
                <tr>
                    <td>{{ $kamar->tipe_kamar }}</td>
                    <td>{{ $kamar->jumlah_kamar }}</td>
                    <td>{{ $kamar->harga }}</td>
                    <td>
                        <img src="/image/{{ $kamar->image }}" width="100px">
                    </td>
                    <td>
                        <form action="{{ route('kamars.destroy',$kamar->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('kamars.edit',$kamar->id) }}">Edit</a>
                            <a class="btn btn-success btn-sm" href="{{ route('kamars.show',$kamar->id) }}">Lihat</a>
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {!! $kamars->links() !!}

    @endsection