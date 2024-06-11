<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titel' => 'required',
            'beschrijving' => 'required',
            'aanmaakdatum' => 'required',
        ]);

        Categorie::create($data);
        return redirect(route('categories.index'));
    }

    public function edit(Categorie $categorie)
    {
        return view('categories.edit', compact('categorie'));
    }

    public function update(Request $request, Categorie $categorie)
    {
        $data = $request->validate([
            'titel' => 'required',
            'beschrijving' => 'required',
            'aanmaakdatum' => 'required',
        ]);

        $categorie->update($data);

        return redirect()->route('categories.index', $categorie->categorie_id)->with('success', 'Categorie updated successfully');
    }

    public function delete(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('categories.index', $categorie->categorie_id)->with('success', 'Categorie deleted successfully');
    }
}
