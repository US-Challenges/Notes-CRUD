<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    public function index(): View
    {
        $notes = Note::all();

        return view("note.index", ["notes" => $notes]);
    }

    public function create(): View
    {
        return view("note.create");
    }

    public function store(NoteRequest $request): RedirectResponse
    {
        $note = new Note();
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();

        return redirect()->route("note.index")->with('success', 'Note created');
    }

    public function edit($note_id): View
    {
        $note = Note::find($note_id);

        return view("note.edit", ["note" => $note]);
    }

    public function update(NoteRequest $request, $note_id): RedirectResponse
    {
        $note = Note::find($note_id);
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();

        return redirect()->route("note.index")->with('success', 'Note updated successfully');
    }

    
    public function destroy($note_id): RedirectResponse
    {
        $note = Note::find($note_id);
        $note->delete();
        
        return redirect()->route("note.index")->with('success', 'Note deleted succesfully');
    }
}

    // Another way to update note
    // $note->update([
    //     "title" => $request->title,
    //     "description" => $request->description,
    // ]);


    // Show note by id
    // public function show($note_id){
    //     $note = Note::find($note_id);

    //     return view("note.show", ["note" => $note]);
    // }
