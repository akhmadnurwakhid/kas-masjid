@extends('layouts.default')
@section('title','Ubah profile masjid')
@section('header-title',' Ubah profil masjid')


@section('content')
<div class="card shadow mb-4 col-lg-6">
    <div class="card-body">
        <form action="{{route('masjid.update', $masjid->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Masjid</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') ?? $masjid->nama }}">
                @error('nama')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror">{{old('alamat') ?? $masjid->alamat }}</textarea>
                @error('alamat')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>

    </div>
</div>
@endsection
