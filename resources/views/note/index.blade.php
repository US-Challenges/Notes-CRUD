@extends('layouts.base')

@section('title', 'Notes')

@section('body')
    <div class="container mx-auto mt-3 p-4 row">
        @forelse ($notes as $note)
            <div class="card col-12 col-sm-6 col-md-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $note->title }}</h5>
                    <p class="card-text">{{ $note->description }}</p>
                    <a href="{{ route('note.edit', ['note_id' => $note->id]) }}" class="btn btn-primary">Edit note</a>
                    <form method="POST" action="{{ route('note.destroy', ['note_id' => $note->id]) }}" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Remove note</button>
                    </form>
                </div>
            </div>
        @empty
            <h2 class="text-center">No data.</h2>
        @endforelse
    </div>
@endsection
