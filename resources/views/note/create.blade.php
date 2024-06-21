@extends('layouts.base')

@section('title', 'Create Note')

@section('body')
    <form class="container mt-3 p-4" method="POST" action="{{ route('note.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Note title</label>
            <input type="text" class="form-control" name="title" id="title">
            @error('title')
                <div class="alert alert-danger mt-1" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Note description</label>
            <input type="text" class="form-control" name="description" id="description">
            @error('description')
                <div class="alert alert-danger mt-1" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Save note</button>
        </div>
    </form>
@endsection
