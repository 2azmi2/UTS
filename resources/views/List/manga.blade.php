@extends('style.style1')

@section('isi')
    @foreach ($data as $item)
        <br>
        <div class="judulHalaman"><h2>MANGA LIST</h2></div>
        <br>
        <div class="row2">
            <div class="judulAnime"><h2>{{ $item->Judul }}</h2></div>
            <div class="contain2">
                <div class="imageAnime"><img src="{{ asset('images/'.$item->image) }}" width="200px" height="200px">
                </div>
                <div class="penjelasan">Genre = {{ $item->genre }}<br>Sinopsis = {{ $item->keterangan }}</div>
            </div>
        </div>
    @endforeach
@endsection('isi')
    