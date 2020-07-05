@extends('layouts.master')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Write an Article</h1>

<div class="card card-success">
    <form action="/artikel" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="judul">Title</label>
                <input type="text" name="judul" id="judul" class="form-control">
            </div>
            <div class="form-group">
                <label for="isi">Content</label>
                <textarea class="form-control" name="isi" id="isi" rows="5" style="resize: none;"></textarea>
            </div>
            <div class="form-group">
                <label for="tag">Tag (separate with comma)</label>
                <input type="text" name="tag" id="tag" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <a href="/" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Back</a>
            <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> Create</button>
        </div>
    </form>
</div>
@endsection