@extends('admin.layouts.main')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-edit me-1"></i>
            Update Desain Populer
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('design.populer.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th> <!-- Ubah label jika diperlukan -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($popular_designs as $design)
                                <tr>
                                    <td>{{ $design->id }}</td>
                                    <td>
                                        <input type="text" name="title[{{ $design->id }}]" value="{{ old('title.'.$design->id, $design->title) }}" class="form-control">
                                        @error("title.{$design->id}")
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" name="description[{{ $design->id }}]" value="{{ old('description.'.$design->id, $design->description) }}" class="form-control">
                                        @error("description.{$design->id}")
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="file" name="image[{{ $design->id }}]" class="form-control">
                                        @if ($design->path) <!-- Gunakan 'path' sebagai ganti 'image' -->
                                            <img src="{{ asset('storage/'.$design->path) }}" alt="{{ $design->title }}" width="100">
                                        @endif
                                        @error("image.{$design->id}")
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-3 text-end">
                    <button type="submit" class="btn btn-primary">Update All</button>
                </div>
            </form>
        </div>
    </div>
@endsection
