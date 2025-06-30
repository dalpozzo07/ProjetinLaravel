<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Explorer;
class ExplorerController extends Controller
{
  public function index()
    {
        $explorers = Explorer::all();
        return view('explorers.index', compact('explorers'));
    }

    public function create()
    {
        return view('explorers.create');
    }

    public function store(Request $request)
{
   
    $validated = $request->validate([
        'name' => 'required|string',
        'idade' => 'required|integer',
        'longitude' => 'required|numeric',
        'latitude' => 'required|numeric',
    ]);

   Explorer::create($validated);

    return redirect()->route('explorers.index')->with('success', 'Explorer criado com sucesso.');
}

public function edit($id)
{
    $explorer = Explorer::findOrFail($id);
    return view('explorers.edit', compact('explorer'));
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string',
        'idade' => 'required|integer',
        'longitude' => 'required|numeric',
        'latitude' => 'required|numeric',
    ]);

    $explorer = Explorer::findOrFail($id);
    $explorer->update($validated);

    return redirect()->route('explorers.index')->with('success', 'Explorador atualizado com sucesso.');
}


}