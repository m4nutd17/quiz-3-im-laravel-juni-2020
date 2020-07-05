@extends('layouts.master')


@section('content')
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Entity Relation Diagram</h1>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">ERD QUIZ 3</h6>
    </div>
    <div class="card-body">
      <div class="text-center">
        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('images/erd_model.png')}}" alt="">
      </div>
    </div>
  </div>

  <a href="/artikel/create" class="btn btn-success btn-icon-split">
    <span class="icon text-white-50">
      <i class="fas fa-check"></i>
    </span>
    <span class="text">Create New Article</span>
  </a>
  <a href="/artikel" class="btn btn-info btn-icon-split">
    <span class="icon text-white-50">
    </span>
    <span class="text">Article List</span>
  </a>
@endsection