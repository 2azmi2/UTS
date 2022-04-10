@extends('style.style1')

@section('isi')
    @foreach ($data as $item)
        <br>
        <div class="row2">
            <div><h2>{{ $item->Judul }}</h2></div>
            <div class="contain2">
                <div class="imageAnime"><img src="{{ asset('images/'.$item->image) }}" width="200px" height="200px">
                </div>
                <div class="penjelasan">{{ $item->keterangan }}</div>
            </div>
        </div>
    @endforeach
@endsection('isi')
    