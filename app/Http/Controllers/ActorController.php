<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index()
    {
        $actors = Actor::all();
        return view('actor', [
            'actor' => $actors
        ]);
    }

    public function add()
    {
        return view('add');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'name' => 'required'
        ]);

        Actor::create([
            'title' => request('title'),
            'name' => request('name'),
        ]);

        return redirect('/actors');
    }

    public function edit(Actor $actor)
    {
        return view('edit', ['actor' => $actor]);
    }


    public function update(Actor $actor)
    {
        // dd(request()->all());
        request()->validate([
            'title' => 'required',
            'name' => 'required'
        ]);

        $actor->update([
            'title' => request('title'),
            'name' => request('name'),
        ]);

        return redirect('/actors');
    }

    public function destroy(Actor $actor) {
        // dd($actor);
        $actor->delete();

        return redirect('/actors');
    }
}
