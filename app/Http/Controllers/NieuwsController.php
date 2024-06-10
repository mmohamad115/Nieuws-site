<?php

namespace App\Http\Controllers;

use App\Models\Nieuw;
use Illuminate\Http\Request;

class NieuwsController extends Controller
{
    public function index()
    {
        $nieuws = Nieuw::where();

        return view('nieuws.index', compact('nieuws'));
    } 

    public function create()
    {
        return view('nieuws.create');
    } 

    public function store(Request $request)
    {
        dd($request);
    } 
    
    public function edit(Nieuw $nieuw)
    {
        return view('nieuws.edit', compact('nieuw'));
    } 
}
