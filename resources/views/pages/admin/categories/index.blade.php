@extends('layouts.dash')
@section('title', 'Categories')
@section('main_title', 'Categories Page')
@section('content')
    <div class="row">
      <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="color: #d30c55;">List Articles</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr style="color: #d30c55;">
                                  <th>NAME</th>
                                  <th>PHOTO</th>
                                  <th>SLUG</th>
                                  <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($data as $item)
                                <tr>
                                    <td class="text-bold-500">{{ $item->name }}</td>
                                    <td><img style="height: 40px;" src="{{ asset('storage/' . $item->photo) }}" alt=""></td>
                                    <td class="text-bold-500">{{ $item->slug }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('category.edit', $item->id) }}"><i class="bi bi-pencil-square" style="font-size: 25px;"></i></a>
                                        <div class="mx-2">|</div>
                                         <a href="{{ route('category.delete', $item->id) }}"><i class="bi bi-trash-fill" style="font-size: 25px; color: red;"></i></a>
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection