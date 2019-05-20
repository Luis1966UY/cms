<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Http\Requests\Tags\CreateTagRequest;
use App\Http\Requests\Tags\UpdateTagRequest;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('tags.index')->with('tags', $tags);
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(CreateTagRequest $request)
    {
        Tag::create([
            'name' => $request->name,
        ]);

        session()->flash('success', 'Tag created successfully.');

        return redirect(route('tags.index'));
    }

    public function edit(Tag $tag)
    {
        return view('tags.create')->with('tag', $tag);
    }

    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update([
            'name' => $request->name,
        ]);


        session()->flash('success', 'Tag updated successfully.');

        return redirect(route('tags.index'));
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        session()->flash('success', 'Tag deleted successfully.');

        return redirect(route('tags.index'));
    }


}