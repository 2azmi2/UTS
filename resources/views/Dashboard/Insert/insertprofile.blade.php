@extends('style.style2')

@section('isi')
    <div class="containerUtama2">
        <h2>Insert Profile</h2>
        <br>
        @if(session()->has('success'))
            <div class="alert alert-warning alert-dismissable fade show" role="alert">
                Data telah tersimpan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="containerForm2">
            <form action="/dashProfile" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-outline mb-2">
                    <label class="form-label" for="judul">Judul</label>
                    <input type="text" id="judul" name="judul" class="form-control" value="{{ old('judul') }}"/>
                    @error('judul')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama') }}"/>
                    @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="Keterangan">Keterangan</label>
                    <textarea id="keterangan" name="keterangan" class="form-control" value="{{ old('keterangan') }}"></textarea>
                    @error('keterangan')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputImage">Image:</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="inputImage"
                        class="form-control @error('image') is-invalid @enderror">
      
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Insert</button>
            </form>
        </div>
    </div>
    <br><br>
@endsection