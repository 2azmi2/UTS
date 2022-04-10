@extends('style.style1')

@section('isi')
    <div class="containerUtama2">
        <h2>REGISTER</h2>
        <br>
        @if(session()->has('success'))
            <div class="alert alert-warning alert-dismissable fade show" role="alert">
                Data telah tersimpan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="containerForm2">
            <form action="/register" method="POST">
                @csrf
                <div class="form-outline mb-2">
                    <label class="form-label" for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama') }}"/>
                    @error('nama')
                        <div class="error">Harus mencantumkan nama</div>
                    @enderror
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}"/>
                    @error('email')
                        <div class="error">Harus menggunakan @email</div>
                    @enderror
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" value="{{ old('password') }}"/>
                    @error('password')
                        <div class="error">Harus mencantumkan password</div>
                    @enderror
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="nomor">Nomor Hp</label>
                    <input type="text" id="nomor" name="nomor" class="form-control" value="{{ old('nomor') }}"/>
                    @error('nomor')
                        <div class="error">Harus mencantumkan nomor Hp</div>
                    @enderror
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control" value="{{ old('alamat') }}"/>
                    @error('alamat')
                        <div class="error">Harus mencantumkan alamat rumah</div>
                    @enderror
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
            </form>
        </div>
    </div>
    <br><br>
@endsection