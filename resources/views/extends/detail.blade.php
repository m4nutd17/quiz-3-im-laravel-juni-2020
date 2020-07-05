@extends('layouts.master')

@section('content')

<div class="ml-3 mt-3 mr-3">
    <h1>Article List</h1>
    <a href="/artikel/create" class="btn btn-primary">
      Input new Articles
    </a>

    <div class="mt-4 card">
        <div class="card-body">
            Judul: {{ $item->judul }}<br>
            Slug: {{ $item->slug }}<br>
            <hr>
            <p>{{ $item->isi }}</p>
            @foreach ($tag as $tags)
                <button class="btn btn-info btn-sm">{{ $tags }}</button>
            @endforeach
        </div>
    </div>

    <div class="card-footer">
        <a href="/artikel" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Back</a>
        <a href="/artikel/{{$item->id}}/edit" class="btn btn-primary"> Edit</a>
        <form action="/artikel/{{ $item->id }}" method="POST" style="display: inline;">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger" onclick="return confirm('Ingin menghapus artikel dengan judul {{$item->judul}}')"><i class="far fa-trash-alt"></i> Delete</button>
        </form>
    </div>

</div>
    
@endsection