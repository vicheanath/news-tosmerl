@extends('layouts.admin')

@section('title', 'category List')
@section('content-header', 'category List')
@section('content-actions')
    <a href="{{ route('category.create') }}" class="btn btn-primary">Post category</a>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                {{-- <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>thumbnail</th>
                        <th>Status</th>
                        <th>Created_At</th>
                        <th>Update_At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $article)
                        <tr>
                            <th>{{ $article->id }}</th>
                            <th>{{ $article->title }}</th>
                            <th>{{ $article->thumbnail }}</th>
                            <th>{{ $article->status }}</th>
                            <th>{{ $article->created_at }}</th>
                            <th>{{ $article->updated_at }}</th>
                            <th>
                                <a class="btn btn-primary" href="{{ route('category.edit', $article) }}"><i
                                        class="fas fa-edit"></i></a>
                                <a class="btn btn-info" href="{{ route('category.show', $article) }}"><i
                                        class="fas fa-eye"></i></a>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </th>
                        </tr>
                    @endforeach
                </tbody> --}}
            </table>
            {{-- {{ $category->render() }} --}}
        </div>
    </div>
@endsection
