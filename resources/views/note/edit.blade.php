@extends('layouts.base')

@section('title', 'Edit Note')

@section('body')
    <form class="container mt-3 p-4" method="POST" action="{{ route('note.update', ['note_id' => $note->id]) }}">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Note title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $note->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Note description</label>
            <input type="text" class="form-control" name="description" id="description" value="{{ $note->description }}">
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Update note</button>
        </div>
    </form>
@endsection
