@extends('layout.admin')
@section('content')

<!DOCTYPE html>
<html lang="en">
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                {{$kamar->tipe_kamar}}
                            </div>
                            <div class="card-body"><img src="/image/{{ $kamar->image }}" width="100%" height="400px"></div>
                            <div class="card-footer text-muted" style="font-size=25px;">{{$kamar->fasilitas}}</div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>


@endsection