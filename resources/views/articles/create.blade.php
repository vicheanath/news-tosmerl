@extends('layouts.admin')

@section('title', 'Post articles')
@section('content-header', 'Post articles')

@section('content')
<div class="card">
    <div class="card-body">
<form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        b4-form-gro
    </form>
    </div>
</div>
    

@endsection
