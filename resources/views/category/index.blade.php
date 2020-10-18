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
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>thumbnail</th>
                        <th>Status</th>
                        <th>Created_At</th>
                        <th>Update_At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th>{{ $category->id }}</th>
                            <th>{{ $category->name }}</th>
                            <th>{{ $category->thumbnail }}</th>
                            <th><span class="right badge badge-{{status($category->status)['class']}}">{{status($category->status)['status']}}</span></th>
                            <th>{{ $category->created_at }}</th>
                            <th>{{$category->updated_at }}</th>
                            <th>
                                <a class="btn btn-primary" href="{{ route('category.edit', $category) }}"><i
                                        class="fas fa-edit"></i></a>
                                <a class="btn btn-info" href="{{ route('category.show', $category) }}"><i
                                        class="fas fa-eye"></i></a>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $category->render() }} --}}
        </div>
    </div>
@endsection
