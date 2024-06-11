<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Nieuw;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NieuwsController extends Controller
{
    public function index()
    {
        $nieuws = Nieuw::with(['categorie', 'user'])->get();

        return view('nieuws.index', compact('nieuws'));
    }

    public function create()
    {
        $categories = Categorie::all();  // Haal alle categorieën op
        return view('nieuws.create', compact('categories'));
    }

    public function store(Request $request)
    {

        // dd(Auth::user()->id);
        $request->validate([
            'titel' => 'required|string|max:255',
            'beschrijving' => 'required|string|max:255',
            'aanmaakdatum' => 'required|date',
            'categorie_id' => 'required|exists:categories,categorie_id',
        ]);

        Nieuw::create([
            'titel' => $request->titel,
            'beschrijving' => $request->beschrijving,
            'aanmaakdatum' => $request->aanmaakdatum,
            'user_id' => Auth::user()->id,
            'categorie_id' => $request->categorie_id,
        ]);

        return redirect()->route('nieuws.index')->with('success', 'Nieuws toegevoegd.');
    }

    public function edit($id)
    {
        $nieuw = Nieuw::findOrFail($id);
        $categories = Categorie::all();
        return view('nieuws.edit', compact('nieuw', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titel' => 'required|string|max:255',
            'beschrijving' => 'required|string|max:255',
            'aanmaakdatum' => 'required|date',
            'categorie_id' => 'required|exists:categories,categorie_id',
        ]);

        $nieuw = Nieuw::findOrFail($id);
        $nieuw->update([
            'titel' => $request->titel,
            'beschrijving' => $request->beschrijving,
            'aanmaakdatum' => $request->aanmaakdatum,
            'categorie_id' => $request->categorie_id,
        ]);

        return redirect()->route('nieuws.index')->with('success', 'Nieuws bijgewerkt.');
    }

    public function delete($id)
    {
        $nieuw = Nieuw::findOrFail($id);
        $nieuw->delete();

        return redirect()->route('nieuws.index')->with('success', 'Nieuws verwijderd.');
    }
}
