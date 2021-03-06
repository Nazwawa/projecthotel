@extends('layout.admin')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <div class="text-right"><a href="{{ route('facilities.create') }}" class="btn btn-primary">Create</a></div>
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table-bordered" style="width: 100%">
            <thead>
                <tr>
                    <th>Nama Fasilitas</th>
                    <th>Keterangan</th>
                    <th>Image</th>
                    <th width="200px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($facilities as $facility)
                <tr>
                    <td>{{ $facility->nama_fasilitas }}</td>
                    <td>{{ $facility->keterangan }}</td>
                    <td>
                        <img src="/image/{{ $facility->image }}" width="100px">
                    </td>
                    <td>
                        <form method="POST" action="{{ route('facilities.destroy',$facility->id) }}">
                            <a class="btn btn-primary btn-sm" href="{{ route('facilities.edit',$facility->id) }}">Edit</a>
                            <a class="btn btn-success btn-sm" href="{{ route('facilities.show',$facility->id) }}">Lihat</a>
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
    {!! $facilities->links() !!}

    @endsection