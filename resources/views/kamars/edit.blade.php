@extends('layout.admin')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('kamars.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>  
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <form action="{{ route('kamars.update', $kamar->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipe Kamar</strong>
                    <input type="text" name="tipe_kamar" class="form-control" placeholder="Tipe Kamar" value="{{$kamar->tipe_kamar}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Kamar</strong>
                    <input type="number" name="jumlah_kamar" class="form-control" placeholder="Jumlah Kamar" value="{{$kamar->jumlah_kamar}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga</strong>
                    <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{$kamar->harga}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fasilitas</strong>
                   <textarea name="fasilitas" class="form-control">{{$kamar->fasilitas}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                <div class="form-group">
                    <strong>Image</strong>
                    <input type="file" name="image" class="form-control" placeholder="Image" value="{{$kamar->image}}">
                    <img src="/image/{{ $kamar->image }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>
@endsection