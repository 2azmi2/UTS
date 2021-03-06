@extends('style.style2')

@section('isi')
    <div class="container5">
        <h1>Manga Data</h1>
        <a type="button" class="btn btn-primary btn-lg" href="/insertManga" name="tambah">Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Judul</th>
                    <th scope="col">genre</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col" width="280px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td class="text-center">
                            <img src="{{ asset('images/'.$item->image) }}" class="rounded" width="250px" height="200px">
                        </td>
                        <td>{{ $item->Judul }}</td>
                        <td>{{ $item->genre }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td><form action="{{ route('dashManga.destroy',['dashManga'=>$item->id]) }}" method="POST">
                            <a class="btn btn-primary" href="/editManga/{{ $item->id }}">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection