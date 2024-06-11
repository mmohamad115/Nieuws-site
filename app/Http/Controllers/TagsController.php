<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titel' => 'required',
            'beschrijving' => 'required',
            'aanmaakdatum' => 'required',
        ]);

        Tag::create($data);
        return redirect(route('tags.index'));
    }

    public function edit(tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, tag $tag)
    {
        $data = $request->validate([
            'titel' => 'required',
            'beschrijving' => 'required',
            'aanmaakdatum' => 'required',
        ]);

        $tag->update($data);

        return redirect()->route('tags.index', $tag->tag_id)->with('success', 'tag updated successfully');
    }

    public function delete(tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index', $tag->tag_id)->with('success', 'tag deleted successfully');
    }
}
