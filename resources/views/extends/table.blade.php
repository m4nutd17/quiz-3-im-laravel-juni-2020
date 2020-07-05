@extends('layouts.master')

@section('content')

<div class="ml-3 mt-3 mr-3">
    <h1>Article List</h1>
    <a href="/artikel/create" class="btn btn-primary">
      Input new Articles
    </a>

    <table class="mt-4 table table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th>ID</th>
          <th>Judul</th>
          <th>Isi Artikel</th>
          <th>tag</th>
          <th>slug</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($items as $key => $item)

        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->judul}}</td>
          <td>{{$item->isi}}</td>
          <td>{{$item->tag}}</td>
          <td>{{$item->slug}}</td>
        <td><a href="/artikel/{{$item->id}}" class="btn btn-sm btn-info">Show</a>
            <a href="/artikel/{{$item->id}}/edit" class="btn btn-sm btn-info btn-primary">Edit</a>
            <form action="/artikel/{{ $item->id }}" method="POST" style="display: inline;">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger btn-sm" onclick="return confirm('Ingin menghapus artikel dengan judul {{$item->judul}}')"><i class="far fa-trash-alt"></i> Delete</button>
            </form>
        </tr>
            
        @endforeach
      </tbody>
    </table>

</div>

@push('alert')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
    
@endsection